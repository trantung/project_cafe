<?php

namespace APV\User\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class LoginRequest
 * @package APV\User\Requests\Auth
 */
class LoginRequest extends FormRequest
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
            'username' => 'required|string|max:191|min:6|exists:users',
            'password' => 'required|string|min:6',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'username.exists' => trans('modules.user::validation.The username does not exist'),
        ];
    }
}
