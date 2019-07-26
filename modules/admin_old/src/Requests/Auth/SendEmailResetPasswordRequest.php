<?php

namespace APV\User\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SendEmailResetPasswordRequest
 * @package APV\User\Requests\Auth
 */
class SendEmailResetPasswordRequest extends FormRequest
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
            'email' => 'required|string|email|max:191|exists:users',
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'email.exists' => trans('modules.user::validation.The email does not exist')
        ];
    }
}
