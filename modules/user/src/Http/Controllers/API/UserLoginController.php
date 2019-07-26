<?php
namespace APV\User\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use Illuminate\Http\Request;
use APV\User\Constants\UserResponseCode;
use APV\Base\Services\ApiAuth;

// use APV\Base\Http\Controllers\API\ApiBaseController;
// use DB;
// use Exception;
// use Illuminate\Http\JsonResponse;
// use Illuminate\Support\Facades\Auth;
// use APV\User\Requests\Auth\LoginRequest;
// use APV\User\Requests\Auth\RegisterRequest;
// use APV\User\Requests\Auth\ResendEmailRegisterRequest;
// use APV\User\Services\UserService;
// use Illuminate\Support\Facades\Mail;
// use APV\User\Mail\NotificationEmailMailable;
// use APV\User\Constants\UserDataConst;
// use APV\User\Constants\UserResponseCode;

class UserLoginController extends ApiBaseController
{
    public function __construct(ApiAuth $apiAuth)
    {
        $this->apiAuth = $apiAuth;
    }

    public function login(Request $request)
    {
        $input = $request->only([
            'username',
            'password',
        ]);
        $data = $this->apiAuth->attempt($input);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_UNAUTHENTICATED);
        }
        return $this->sendSuccess($data);
    }
}
