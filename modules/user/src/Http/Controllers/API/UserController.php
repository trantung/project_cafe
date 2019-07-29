<?php

namespace APV\User\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
// use APV\User\Requests\ChangePasswordRequest;
// use APV\User\Requests\ChangePersonalInfoRequest;
// use APV\User\Requests\GetTokenLeaveRequest;
// use APV\User\Requests\LeaveServiceRequest;
// use APV\User\Services\UserService;
// use DB;
// use Exception;
// use Illuminate\Http\JsonResponse;
// use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Log;
// use APV\User\Constants\UserDataConst;
// use APV\User\Constants\UserResponseCode;

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


}
