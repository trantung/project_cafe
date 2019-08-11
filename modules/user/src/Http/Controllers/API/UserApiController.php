<?php

namespace APV\User\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Base\Services\ApiAuth;
use APV\User\Services\UserService;
use APV\User\Constants\UserResponseCode;
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
        $data = $this->userService->create($input);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_USERNAME_EXIST);
        }
        return $this->sendSuccess($data, 'Create success');
    }
    public function postEdit($userId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('user', 'postEdit')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->userService->edit($userId, $input);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit user success');
    }

    public function getListRole()
    {
        $data = $this->userService->getListRole();
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        return $this->sendSuccess($data, 'List role success');
    }
    public function getListUser()
    {
        $data = $this->userService->getListUser();
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
        $data = $this->userService->delete($userId);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_USER_NOT_FOUND);
        }
        return $this->sendSuccess($data, 'Delete user success');
    }

    public function postChangePassword($userId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('user', 'postChangePassword')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->userService->changePassword($userId, $input);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_CHANGE_PASSWORD);
        }
        return $this->sendSuccess($data, 'Change pass user success');
    }

    public function postResetPassword($userId)
    {
        if (!$this->apiAuth->checkPermissionModule('user', 'postResetPassword')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->userService->resetPassword($userId);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_RESET_PASSWORD);
        }
        return $this->sendSuccess($data, 'Reset pass user success');
    }
        
    
}
