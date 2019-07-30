<?php

namespace APV\User\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use Illuminate\Support\Facades\Auth;
use APV\User\Constants\UserDataConst;
use APV\User\Constants\UserResponseCode;
use Illuminate\Http\Request;
/**
 * Class AuthApiController
 * @package APV\User\Http\Controllers\API
 */
class AuthApiController extends ApiBaseController
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * AuthApiController constructor.
     * @param UserService $userService
     */
    // public function __construct(
    //     UserService $userService
    // ) {
    //     $this->userService = $userService;
    // }

    /**
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        $input = $request->only([
            'username',
            'password',
        ]);
        // $user = $this->userService->getUserNoneTrashed($input['username']);

        // if (!$user) {
        //     $user = $this->userService->getUserWithTrashed($input['username']);

        //     if ($user && $user->deleted_at !== null) {
        //         return $this->sendError(UserResponseCode::ERROR_CODE_DELETED_ACCOUNT);
        //     }
        // }


        // $checkPassword = $this->userService->checkPassword($input['username'], $input['password']);

        // if (! $checkPassword) {
        //     return $this->sendError(UserResponseCode::ERROR_CODE_PASSWORD_WRONG);
        // }

        if (Auth::attempt(['username' => $input['username'], 'password' => $input['password']])) {
            $user = Auth::user();
            dd($user);
            if ($user->actived === UserDataConst::USER_STATUS['ACTIVATED']) {
                $data['token'] = $user->createToken(config('app.name'))->accessToken;
                $data['user'] = $user;
                return $this->sendSuccess($data);
            }
            Auth::logout();
            return $this->sendError(UserResponseCode::ERROR_CODE_INACTIVE_ACCOUNT);
        }

        return $this->sendError(UserResponseCode::ERROR_CODE_UNAUTHENTICATED);
    }

    /**
     * Confirm register
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function confirmRegister(RegisterRequest $request)
    {
        $checkData = $request->only(['username', 'password']);
        if ($checkData['username'] == $checkData['password']) {
            return $this->sendError(UserResponseCode::ERROR_CODE_PASSWORD_SAME_AS_USERNAME);
        }

        return $this->sendSuccess(null);
    }

    /**
     * Send register
     * @param RegisterRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function sendRegister(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $preparedData = $this->userService->create($request->all());
            $user = $preparedData['user'];
            $activationCode = $preparedData['activation_code'];

            $params = [
                'activation_code' => $activationCode,
            ];

            Mail::to($user['data']['email'])->send(new NotificationEmailMailable(
                'verify',
                $params,
                trans('modules.user::mail.subject.' . UserDataConst::MAIL_SUBJECT['VERIFY_EMAIL'])
            ));

            DB::commit();
            return $this->sendSuccess($user['data']);
        } catch (Exception $e) {
            DB::rollback();
            return $this->sendError(UserResponseCode::ERROR_CODE_SEND_EMAIL_VERIFY_FAILED);
        }
    }

    /**
     * Resend email register
     * @param ResendEmailRegisterRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function resendEmailRegister(ResendEmailRegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            if ($this->userService->isActive($request->get('email'))) {
                return $this->sendError(UserResponseCode::ERROR_CODE_EMAIL_VERIFIED);
            }

            $preparedData = $this->userService->updateActivationInfor($request->get('email'));
            $user = $preparedData['user'];
            $activationCode = $preparedData['activation_code'];

            $params = [
                'activation_code' => $activationCode,
            ];

            Mail::to($user['data']['email'])->send(new NotificationEmailMailable(
                'verify',
                $params,
                trans('modules.user::mail.subject.' . UserDataConst::MAIL_SUBJECT['VERIFY_EMAIL'])
            ));

            DB::commit();
            return $this->sendSuccess($user['data']);
        } catch (Exception $e) {
            DB::rollback();
            return $this->sendError(UserResponseCode::ERROR_CODE_SEND_EMAIL_VERIFY_FAILED);
        }
    }

    /**
     * Active account by verify email
     * @param $activationCode
     * @return JsonResponse
     */
    public function active($activationCode)
    {
        $result = $this->userService->activeAccountByCode($activationCode);

        if ($result['success']) {
            Auth::login($result['user']);
            $user = Auth::user();

            $data['token'] = $user->createToken(config('app.name'))->accessToken;
            $data['user'] = $user;

            return $this->sendSuccess($data);
        }

        return $this->sendError(UserResponseCode::ERROR_CODE_EMAIL_VERIFY_FAILED);
    }

    /**
     * Logout and revoke all token when logout
     * @return JsonResponse
     */
    public function logout()
    {
        if (Auth::check()) {
            Auth::user()->oauthAccessTokens()->update([
                'revoked' => true,
            ]);

            return $this->sendSuccess($this->userService->show(Auth::user()->id)['data'],
                trans('messages.Logout success'));
        }

        return $this->sendSuccess(null, trans('messages.Logout success'));
    }
}
