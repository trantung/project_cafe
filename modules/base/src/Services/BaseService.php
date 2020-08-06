<?php

namespace APV\Base\Services;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseService
 * @package APV\Base\Services
 */
class BaseService
{
    protected $model;

    /**
     * BaseService constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->model->getTable();
    }

    public function getValueDefault($input, $field, $default = null)
    {
        if (isset($input[$field])) {
            return $input[$field];
        }
        return $default;
    }
    
    public function formatArray2Array($data)
    {
        $res = [];
        foreach ($data as $key => $value){
            $res[] = $value;
        }
        return $res;
    }

    public function checkCustomerToken($token)
    {
        return true;
    }

    public function checkCustomerLogin($input, $field = null)
    {
        if (!isset($input['customer_token']) || !isset($input['customer_id'])) {
            return false;
        }
        $checkCustomerToken = checkCustomerToken($input);
//        $customerToken = $input['customer_token'];
//        $checkToken = $this->checkCustomerToken($customerToken);
//        if (!$checkToken || !isset($input['customer_id'])) {
//            return false;
//        }
        if (!$checkCustomerToken) {
            return false;
        }
        if ($field) {
            if (!isset($input[$field])) {
                return false;
            }
        }
        return true;
    }

}
