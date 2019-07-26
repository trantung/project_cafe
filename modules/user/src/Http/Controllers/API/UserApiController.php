<?php

namespace APV\User\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\User\Requests\ChangePasswordRequest;
use APV\User\Requests\ChangePersonalInfoRequest;
use APV\User\Requests\GetTokenLeaveRequest;
use APV\User\Requests\LeaveServiceRequest;
use APV\User\Services\UserService;
use DB;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use APV\User\Constants\UserDataConst;
use APV\User\Constants\UserResponseCode;

/**
 * Class UserApiController
 * @package APV\User\Http\Controllers\API
 */
class UserApiController extends ApiBaseController
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * UserApiController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Get top of my page information
     * @return JsonResponse
     */
    public function getMyPageTop()
    {
        $user = Auth::user();
        if ($user) {
            return $this->sendSuccess($this->userService->getMyPageTop($user));
        }

        return $this->sendError(UserResponseCode::ERROR_CODE_UNAUTHENTICATED);
    }

    /**
     * Get personal info
     * @return JsonResponse
     */
    public function getPersonalInfo()
    {
        $user = Auth::user();

        return $this->sendSuccess($this->userService->getPersonalInfo($user));
    }

    /**
     * Change personal info
     * @param ChangePersonalInfoRequest $request
     * @return JsonResponse
     */
    public function changePersonalInfo(ChangePersonalInfoRequest $request)
    {
        $user = Auth::user();

        $input = $request->only([
            'username',
            'first_name',
            'last_name',
            'gender',
            'birthday',
        ]);

        $checkPassword = $this->userService->checkPassword($user->username, $request->get('password'));

        if (!$checkPassword) {
            return $this->sendError(UserResponseCode::ERROR_CODE_PASSWORD_WRONG);
        }

        if ($this->userService->changePersonalInfo($user, $input)) {
            return $this->sendSuccess($this->userService->getPersonalInfo($user));
        }

        return $this->sendError(UserResponseCode::ERROR_CODE_SOMETHING_WENT_WRONG);
    }

    /**
     * Change password
     * @param ChangePasswordRequest $request
     * @return JsonResponse
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user();

        $input = $request->only([
            'old_password',
            'new_password',
        ]);

        $checkPassword = $this->userService->checkPassword($user->username, $input['old_password']);

        if (! $checkPassword) {
            return $this->sendError(UserResponseCode::ERROR_CODE_OLD_PASSWORD_WRONG);
        }

        if ($user->username == $input['new_password']) {
            return $this->sendError(UserResponseCode::ERROR_CODE_PASSWORD_SAME_AS_USERNAME);
        }

        if ($this->userService->checkNoChangePassword($user->email, $input['new_password'])) {
            return $this->sendError(UserResponseCode::ERROR_CODE_PASSWORD_NO_CHANGE);
        }

        if ($this->userService->changePasswordAfterAuth($user, $input['new_password'])) {
            return $this->sendSuccess(null);
        }

        return $this->sendError(UserResponseCode::ERROR_CODE_SOMETHING_WENT_WRONG);
    }

    /**
     * Get token leave
     * @param GetTokenLeaveRequest $request
     * @return JsonResponse
     */
    public function getTokenLeave(GetTokenLeaveRequest $request)
    {
        $user = Auth::user();
        $input = $request->only([
            'password',
        ]);

        if (!$this->userService->checkPassword($user->username, $input['password'])) {
            return $this->sendError(UserResponseCode::ERROR_CODE_PASSWORD_WRONG);
        }

        $tokenLeave = $this->userService->createOrUpdateTokenLeave($user);
        $reasons = UserDataConst::USER_REASON_TO_LEAVE;
        foreach ($reasons as $key => $reason) {
            $reasons[$key] = trans('modules.user::reason_to_leave.' . $reason);
        }

        $preparedData = [
            'username' => $user->username,
            'token' => $tokenLeave->token,
            'reasons' => $reasons,
        ];

        return $this->sendSuccess($preparedData);
    }

    /**
     * Leave service
     * @param LeaveServiceRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function leaveService(LeaveServiceRequest $request)
    {
        $user = Auth::user();
        $input = $request->only([
            'token',
            'type',
            'detail',
        ]);
        $input['detail'] = isset($input['detail']) ? $input['detail'] : null;

        $tokenLeave = $this->userService->findTokenLeave($input['token']);
        if ($tokenLeave) {
            if ($tokenLeave->user_id != Auth::id()) {
                return $this->sendError(UserResponseCode::ERROR_CODE_TOKEN_LEAVING_INVALID);
            }

            if (Carbon::parse($tokenLeave->updated_at)->addMinutes(720)->isPast()) {
                $tokenLeave->delete();

                return $this->sendError(UserResponseCode::ERROR_CODE_TOKEN_LEAVING_INVALID);
            }

            DB::beginTransaction();
            try {
                $this->userService->saveReasonLeave(Auth::id(), $input);
                $tokenLeave->delete();
                $user->oauthAccessTokens()->delete();
                $user->delete();

                DB::commit();
                return $this->sendSuccess(null);
            } catch (Exception $e) {
                DB::rollback();
                DB::disconnect('mysql');
                unset($input);
                unset($user);
                unset($this->userService);
                Log::error($e->getMessage());
                return $this->sendError(UserResponseCode::ERROR_CODE_SOMETHING_WENT_WRONG);
            }
        }

        return $this->sendError(UserResponseCode::ERROR_CODE_TOKEN_LEAVING_INVALID);
    }

}
