<?php
namespace APV\User\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use Illuminate\Http\Request;
use APV\User\Constants\UserResponseCode;
use APV\Base\Services\ApiAuth;
use Illuminate\Support\Facades\Auth;

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

    public function logout()
    {
        if ($data = $this->apiAuth->logout()) {
            return $this->sendSuccess($data->username, 'Logout success');
        }
        return $this->sendSuccess(null, 'Logout success');
    }
}
