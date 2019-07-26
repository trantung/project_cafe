<?php

namespace APV\User\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ResendEmailRegisterRequest
 * @package APV\User\Requests\Auth
 */
class ResendEmailRegisterRequest extends FormRequest
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
