<?php
namespace APV\Customer\Services;

use APV\Customer\Models\Customer;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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
        $checkPhoneExist = $this->checkPhoneExist($input['phone']);
        if ($checkPhoneExist) {
            return false;
        }
        $customerId = Customer::create($input)->id;
        return $customerId;
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
        $file = request()->file('image');
        if (!$file) {
            $input['image'] = $customer->image;
        } else {
            $fileNameImage = $file->getClientOriginalName();
            request()->file('image')->move(public_path("/uploads/categories/" . $customerId . '/'), $fileNameImage);
            $imageUrl = '/uploads/categories/' . $customerId . '/' . $fileNameImage;
            $input['image'] = $imageUrl;
        }
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
            return false;
        }
        return true;
    }
}
