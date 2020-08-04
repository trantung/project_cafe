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

    public function postRegister(Request $request)
    {   
        $input = $request->all();
        // dd($input);
        $url = 'https://www.googleapis.com/identitytoolkit/v3/relyingparty/verifyPhoneNumber?key=' . API_KEY;
        $urlVerify = 'https://www.googleapis.com/identitytoolkit/v3/relyingparty/sendVerificationCode?key=' . API_KEY;

        $data = array('key' => , 'code' => $input['customer_code']);
        $data = http_build_query($data);
        // use key 'http' even if you send the request to https://...
        // $data = json_encode($data);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => $data
            )
        );
        $context  = stream_context_create($options);
        // $result = file_get_contents($url, false, $context);
        $resultVerfiy = file_get_contents($urlVerify, false, $context);
        dd($resultVerfiy);
    }
}
