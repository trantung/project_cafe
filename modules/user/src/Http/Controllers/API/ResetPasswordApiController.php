<?php

namespace APV\User\Http\Controllers\API;

use Captcha;
use Carbon\Carbon;
use APV\Base\Http\Controllers\API\ApiBaseController;
use DB;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use APV\User\Requests\Auth\SendEmailResetPasswordRequest;
use APV\User\Requests\Auth\ChangePasswordRequest;
use APV\User\Services\PasswordResetService;
use APV\User\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use APV\User\Mail\NotificationEmailMailable;
use APV\User\Constants\UserDataConst;
use APV\User\Constants\UserResponseCode;

/**
 * Class ResetPasswordApiController
 * @package APV\User\Http\Controllers\API
 */
class ResetPasswordApiController extends ApiBaseController
{
    /**
     * @var PasswordResetService
     */
    protected $passwordResetService;

    /**
     * @var UserService
     */
    protected $userService;

    /**
     * AuthApiController constructor.
     * @param PasswordResetService $passwordResetService
     * @param UserService $userService
     */
    public function __construct(
        PasswordResetService $passwordResetService,
        UserService $userService
    ) {
        $this->passwordResetService = $passwordResetService;
        $this->userService = $userService;
    }

    /**
     * Send email contain link to reset password
     * @param SendEmailResetPasswordRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function sendEmail(SendEmailResetPasswordRequest $request)
    {
        $input = $request->only([
            'email',
            'first_name',
            'last_name',
        ]);
        if (! $this->userService->isUserName($input)) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NAME_WRONG);
        }

        DB::beginTransaction();
        try {
            $passwordReset = $this->passwordResetService->updateOrCreate($input['email']);
            if ($passwordReset) {
                $params = [
                    'name' => $input['first_name'] . ' ' . $input['last_name'],
                    'token' => $passwordReset->token,
                ];
                Mail::to($input['email'])->send(new NotificationEmailMailable(
                    'passwords.reset',
                    $params,
                    trans('modules.user::mail.subject.' . UserDataConst::MAIL_SUBJECT['RESET_PASSWORD'])
                ));
            }

            DB::commit();
            return $this->sendSuccess(null);
        } catch (Exception $e) {
            DB::rollback();
            return $this->sendError(UserResponseCode::ERROR_CODE_SEND_EMAIL_RESET_PASSWORD_FAILED);
        }
    }

    /**
     * Get info to change password
     * @param Request $request
     * @param $token
     * @return JsonResponse
     * @throws Exception
     */
    public function getForm(Request $request, $token)
    {
        $passwordReset = $this->passwordResetService->findByToken($token);
        if ($passwordReset) {
            if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
                $passwordReset->delete();

                return $this->sendError(UserResponseCode::ERROR_CODE_RESET_PASSWORD_TOKEN_INVALID);
            }
            $user = $this->userService->getUserByEmail($passwordReset->email);
            $preparedData = [
                'username' => $user->username,
                'token' => $passwordReset->token,
            ];

            return $this->sendSuccess($preparedData);
        }

        return $this->sendError(UserResponseCode::ERROR_CODE_RESET_PASSWORD_TOKEN_INVALID);
    }

    /**
     * Change password
     * @param ChangePasswordRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        $input = $request->only([
            'token',
            'password',
        ]);
        $passwordReset = $this->passwordResetService->findByToken($input['token']);

        if ($passwordReset) {
            if ($this->userService->checkNoChangePassword($passwordReset->email, $input['password'])) {
                return $this->sendError(UserResponseCode::ERROR_CODE_PASSWORD_NO_CHANGE);
            }

            DB::beginTransaction();
            try {
                $user = $this->userService->changePassword($passwordReset->email, $input['password']);
                $passwordReset->delete();

                Auth::login($user);
                $user = Auth::user();

                $data['token'] = $user->createToken(config('app.name'))->accessToken;
                $data['user'] = $user;

                DB::commit();
                return $this->sendSuccess($data);
            } catch (Exception $e) {
                DB::rollback();
                return $this->sendError(UserResponseCode::ERROR_CODE_SOMETHING_WENT_WRONG);
            }
        }

        return $this->sendError(UserResponseCode::ERROR_CODE_RESET_PASSWORD_TOKEN_INVALID);
    }

    /**
     * captcha Image
     *
     * @return JsonResponse Mews\Captcha
     */
    public function getCaptcha()
    {
        $response = Captcha::create('number', true);
        return $this->sendSuccess($response);
    }
}
