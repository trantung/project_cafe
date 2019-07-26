<?php

namespace APV\User\Requests;

use Illuminate\Foundation\Http\FormRequest;
use APV\User\Constants\UserDataConst;

/**
 * Class LeaveServiceRequest
 * @package APV\User\Requests
 */
class LeaveServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'token' => 'required|string',
            'type' => 'required|in:' . implode(',', UserDataConst::USER_REASON_TO_LEAVE),
            'detail' => 'string',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [];
    }
}
