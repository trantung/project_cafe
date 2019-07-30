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
    
    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('user', 'postCreate')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->userService->createUser($input);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_USERNAME_EXIST);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getListRole()
    {
        $data = $this->userService->getListRole();
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        return $this->sendSuccess($data, 'List role success');
    }

    public function postDelete($userId)
    {
        if (!$this->apiAuth->checkPermissionModule('user', 'postDelete')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->userService->postDeleteUser($userId);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_USER_NOT_FOUND);
        }
        return $this->sendSuccess($data, 'Delete user success');
    }
}
