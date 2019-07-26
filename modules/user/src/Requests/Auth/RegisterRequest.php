<?php

namespace APV\User\Requests\Auth;

use Illuminate\Contracts\Validation\Factory;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RegisterRequest
 * @package APV\User\Requests\Auth
 */
class RegisterRequest extends FormRequest
{
    /**
     * RegisterRequest constructor.
     * @param Factory $validationFactory
     */
    public function __construct(Factory $validationFactory)
    {
        parent::__construct();
        $validationFactory->extend(
            'regexIfNotEqualEmail',
            function ($attribute, $value, $parameters) {
                if ($this->get('email') == $value) {
                    return true;
                }

                return preg_match($parameters[0], $value);
            }
        );
    }

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
            'email' => 'required|string|regex:/^[a-z0-9@.\_\-]+$/u|email|' .
                'max:191|unique:users,email,NULL,id,deleted_at,NULL|confirmed',
            'email_confirmation' => 'required|string|email|max:191',
            'username' =>
                'required|string|regexIfNotEqualEmail:/^[a-z0-9.\_\-]+$/u|not_regex:/^[0-9]+$/|' .
                'max:191|min:6|unique:users,username,NULL,id,deleted_at,NULL|',
            'password' => 'required|string|min:6',
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
            'email.regex' => trans('modules.user::validation.Email must not contain uppercase'),
            'username.regex_if_not_equal_email' =>
                trans('modules.user::validation.Username must contain only letters,' .
                    'numbers and symbols dot, underscore, hyphen'),
            'username.not_regex' =>
                trans('modules.user::validation.Username must not contain only numeric characters,' .
                    ' at least one Latin character'),
        ];
    }
}
