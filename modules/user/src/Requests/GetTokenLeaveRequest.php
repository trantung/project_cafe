<?php

namespace APV\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class GetTokenLeaveRequest
 * @package APV\User\Requests
 */
class GetTokenLeaveRequest extends FormRequest
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
            'password' => 'required|string|min:6',
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
