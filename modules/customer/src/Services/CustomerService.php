<?php
namespace APV\Customer\Services;

use APV\Customer\Models\Customer;
use APV\Customer\Models\CustomerFriend;
use APV\Base\Services\BaseService;
use APV\Customer\Models\CustomerToken;
use APV\Customer\Models\Device;
use League\Fractal\Resource\Collection;
use Illuminate\Support\Facades\Hash;
use APV\Customer\Constants\CustomerDataConst;

class CustomerService extends BaseService
{
    public function __construct(Customer $model)
    {
        parent::__construct($model);
    }
    /**
     * [postCreate description]
     * @param  'name', 'phone',
     * @return customerId
     */
    public function postCreate($input)
    {
        $input['username'] = $input['phone'];
        $input['password'] = Hash::make(CustomerDataConst::PASSWORD_DEFAULT);
        $customer = Customer::create($input);
        return $customer->toArray();
    }
    public function checkPhoneExist($phone)
    {
        $check = Customer::where('phone', $phone)->first();
        if ($check) {
            return true;
        }
        return false;
    }
    public function getList()
    {
        $data = Customer::all();
        return $data->toArray();
    }

    public function getRoot()
    {
        $data = Customer::where('parent_id', 0)->get();
        $result = $this->getNameListCustomerWithPath($data);
        return $result;
    }

    public function getListChild()
    {
        $data = Customer::where('parent_id', '!=', 0)->get();
        $result = $this->getNameListCustomerWithPath($data);
        return $result;
    }

    public function getNameCustomerWithPath($customer)
    {
        $customerPath = $customer->path;
        $explodePath = explode('_', $customerPath);
        $name = '';
        foreach ($explodePath as $key => $value) {
            if (count($explodePath) - 1 > $key) {
                $name .= Customer::find($value)->name . '-->';
            } else {
                $name .= Customer::find($value)->name;
            }
        }
        $result = ['path' => $customerPath, 'name' => $name];
        return $result;
    }
    public function getNameListCustomerWithPath($data)
    {
        $result = [];
        foreach ($data as $customer) {
            $result[] = $this->getNameCustomerWithPath($customer);
        }
        return $result;
    }

    public function getDetail($customerId)
    {
        $customer = Customer::find($customerId);
        $data['name'] = $customer->name;
        $data['image'] = $customer->image;
        $data['active'] = $customer->active;
        $data['description'] = $customer->description;
        $data['path'] = $this->getNameCustomerWithPath($customer);
        return $data;
    }

    public function postEdit($customerId, $input)
    {
        // dd($customerId);
        $customer = Customer::find($customerId);
        // $file = request()->file('image');
        // if (!$file) {
        //     $input['image'] = $customer->image;
        // } else {
        //     $fileNameImage = $file->getClientOriginalName();
        //     request()->file('image')->move(public_path("/uploads/categories/" . $customerId . '/'), $fileNameImage);
        //     $imageUrl = '/uploads/categories/' . $customerId . '/' . $fileNameImage;
        //     $input['image'] = $imageUrl;
        // }
        $customer->update($input);
        return true;
    }

    public function postDelete($customerId)
    {
        $customer = Customer::find($customerId);
        if (!$customer) {
            return false;
        }
        Customer::destroy($customerId);
        return true;
    }
    public function postCheckPhoneCustomer($input)
    {
        if (!$input['phone']) {
            return false;
        }
        $customer = Customer::where('phone', $input['phone'])->first();
        if ($customer) {
            return $customer->toArray();
        }
        return null;
    }

    public function getFriendList($input)
    {
        $res = [];
        $data = CustomerFriend::where('customer_id', $input['customer_id'])->get();
        foreach ($data as $key => $value) {
            $res[$key]['friend_id'] = $value->friend_id;
            $res[$key]['friend_name'] = $value->friend_name;
            $res[$key]['friend_phone'] = $value->friend_phone;
            $res[$key]['avatar'] = $value->avatar;
        }
        return $res;
    }

    public function createNewCustomer($input)
    {
        $res = [];
        //create new customer with phone
        $phone = $input['customer_phone'];
        $customerId = Customer::create([
            'phone' => $phone,
            'username' => $phone,
            'password' => Hash::make(CustomerDataConst::PASSWORD_DEFAULT),
            'name' => $phone,
            'active' => CustomerDataConst::ACTIVE,
        ])->id;
        $res['customer_id'] = $customerId;
        //create device_id and device_token with customer_id
        $device = [
            'device_id' => $input['device_id'],
            'device_token' => $input['device_token\' => $input[\'device_id'],
            'customer_id' => $customerId,
            'device_name' => getNameDevice($input['os']),
        ];
        $deviceId = Device::create($device)->id;
        if (!$deviceId) {
            dd('deviceId');
        }
        //create customer_token
        $customerToken = $customerId . '_' . generateRandomString();
        // current subscription expiry date
        $dateNow = date('Y-m-d');
        $expired = date('Y-m-d', strtotime($dateNow . " +" . TOKEN_EXPIRED_DAY . " days"));

        $token = CustomerToken::create(['customer_id' => $customerId, 'customer_token' => $customerToken, 'customer_phone' => $phone, 'expired' => $expired])->id;
        if (!$token) {
            dd('token');
        }
        $res['customer_token'] = $customerToken;
        return $res;
    }
}
