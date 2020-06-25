<?php
namespace APV\Customer\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Customer\Services\CustomerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\User\Constants\UserResponseCode;
use APV\Customer\Constants\CustomerDataConst;
use APV\Base\Services\ApiAuth;
/**
 * Class CustomerApiController
 * @package APV\Customer\Http\Controllers\API
 */
class CustomerCommonApiController extends ApiBaseController
{
    public function __construct(CustomerService $customerService, ApiAuth $apiAuth)
    {
        $this->customerService = $customerService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->customerService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        // if (!$this->apiAuth->checkPermissionModule('customer', 'postCreate')) {
        //     return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        // }
        $data = $this->customerService->postCreate($input);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($customerId)
    {
        $data = $this->customerService->getDetail($customerId);
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $customerId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('customer', 'postEdit')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->customerService->postEdit($customerId, $input);
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $customerId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('customer', 'postDelete')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->customerService->postDelete($customerId);
        return $this->sendSuccess($data, 'Delete success');
    }

    public function postCheckPhoneCustomer(Request $request)
    {
        $input = $request->all();
        $data = $this->customerService->postCheckPhoneCustomer($input);
        if ($data) {
            return $this->sendSuccess($data, 'Phone not exist');
        }
        return $this->sendError(CustomerDataConst::ERROR_CODE_PHONE_EXIST);
    }
    
}
