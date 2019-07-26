<?php
namespace APV\Admin\Http\Controllers\API;

// use APV\Base\Http\Controllers\API\ApiBaseController;
// use Illuminate\Http\Request;
// use APV\Admin\Services\AdminService;
// use APV\Base\Services\ApiAuth;
// use Illuminate\Support\Facades\Auth;

class AdminLoginController extends ApiBaseController
{
    /**
     * @var Authenticator
     */
    // private $authenticator;

    // public function __construct(AdminService $adminService, ApiAuth $apiAuth)
    // {
    //     $this->adminService = $adminService;
    //     $this->apiAuth = $apiAuth;
    // }

    /**
     * @param Request $request
     * @return array
     * @throws AuthenticationException
     */
    // public function login(Request $request)
    // {
    //     $input = $request->only([
    //         'username',
    //         'password',
    //     ]);
    //     $admin = $this->apiAuth->attempt($input, 'APV\Admin\Models\Admin');
    //     if (!$admin) {
    //         return $this->sendError(UserResponseCode::ERROR_CODE_UNAUTHENTICATED);
    //     }
    //     $data['token'] = $admin->createToken(config('app.name'))->accessToken;
    //     $data['detail'] = $admin;
    //     return $this->sendSuccess($data);
    // }
    
}
