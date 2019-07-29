<?php

namespace APV\User\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Base\Services\ApiAuth;
use APV\User\Services\UserService;
use Illuminate\Http\Request;

/**
 * Class UserApiController
 * @package APV\User\Http\Controllers\API
 */
class UserApiController extends ApiBaseController
{
    /**
     * UserApiController constructor.
     * @param UserService $userService
     */
    public function __construct(ApiAuth $apiAuth, UserService $userService)
    {
        $this->apiAuth = $apiAuth;
        $this->userService = $userService;
    }

    public function createUser(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermission($input)) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->userService->createUser($input);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_USERNAME_EXIST);
        }
        return $this->sendSuccess($data, 'Create success');
    }
}
