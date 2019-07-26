<?php

namespace APV\User\Requests;

use Illuminate\Contracts\Validation\Factory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use APV\User\Constants\UserDataConst;

/**
 * Class ChangePersonalInfoRequest
 * @package APV\User\Requests
 */
class ChangePersonalInfoRequest extends FormRequest
{
    /**
     * ChangePersonalInfoRequest constructor.
     * @param Factory $validationFactory
     */
    public function __construct(Factory $validationFactory)
    {
        parent::__construct();
        $validationFactory->extend(
            'regexIfNotEqualEmail',
            function ($attribute, $value, $parameters) {
                if ($parameters[1] == $value) {
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
            'username' =>
                'required|string|max:191|min:6|regexIfNotEqualEmail:/^[a-z0-9.\_\-]+$/u,' . Auth::user()->email .
                '|not_regex:/^[0-9]+$/|unique:users,id,' . Auth::id(),
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'birthday' => 'nullable|date_format:Y-m-d|before:today',
            'gender' => 'nullable|integer|in:' . implode(',', UserDataConst::USER_GENDER),
            'password' => 'required|string|min:6',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'username.regex_if_not_equal_email' =>
                trans('modules.user::validation.Username must contain only letters,' .
                'numbers and symbols dot, underscore, hyphen'),
            'username.not_regex' =>
                trans('modules.user::validation.Username must not contain only numeric characters,' .
                    'at least one Latin character'),
        ];
    }
}
