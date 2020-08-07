<?php
namespace APV\Customer\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Customer\Services\CustomerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\User\Constants\UserResponseCode;
use APV\Customer\Constants\CustomerDataConst;
use APV\Base\Services\ApiAuth;
use Exception;
/**
 * Class CustomerApiController
 * @package APV\Customer\Http\Controllers\API
 * @property CustomerService $customerService
 */
class CustomerApiController extends ApiBaseController
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

    public function getFriendList(Request $request)
    {
        $input = $request->all();
        $data = $this->customerService->getFriendList($input);
        return $this->sendSuccess($data, 'Success');
    }
    
    public function postUpdateProfile(Request $request)
    {
        $input = $request->all();
        $data = $this->customerService->postUpdateProfile($input);
        return $this->sendSuccess($data, 'Success');
    }

    public function postRegister(Request $request)
    {   
        $input = $request->all();
        if (!isset($input['customer_phone'])) {
            return $this->sendSuccess(false, 'Thiếu customer_phone');
        }
        //check sdt da co trong he thong
        $checkPhoneExist = $this->customerService->checkCustomerExist($input['customer_phone']);
        if (!empty($checkPhoneExist)) {
            return $this->sendSuccess($checkPhoneExist, 'Success');
        }
        if (!isset($input['verify_id']) || !isset($input['customer_code']) || !isset($input['device_token']) || !isset($input['device_id'])) {
            return $this->sendSuccess(false, 'Thiếu field');
        }
        //call to firebase restful api to verify phone number with code and sessionInfo and get response from firebase api
        $sessionInfo = $input['verify_id'];
        $url = FIREBASE_URL_VERIFY_PHONE;
        $dataArray = array('sessionInfo' => $sessionInfo, 'code' => $input['customer_code']);
        $data = http_build_query($dataArray);
        // $data = json_encode($data);
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => $data
            )
        );
        $context = stream_context_create($options);
        try {
            $result = file_get_contents($url, false, $context);
        } catch (Exception $e) {
            return $this->sendError(['code' => 1001, 'message'=>'SESSION_EXPIRED'], [], 401);
        }
        $result = json_decode($result);
        if ($result->phoneNumber != $input['customer_phone']) {
            return $this->sendSuccess(false, 'sdt firebase khac sdt nhap');
        }
        $data = $this->customerService->createNewCustomer($input);
        return $this->sendSuccess($data, 'Success');
    }
}
