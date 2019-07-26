<?php

namespace APV\User\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

/**
 * Class ChangePasswordRequest
 * @package APV\User\Requests\Auth
 */
class ChangePasswordRequest extends FormRequest
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
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'username' => 'required|string',
            'token' => 'required|string',
            'password' => 'required|string|min:6|different:username|confirmed',
            'password_confirmation' => 'required|string|min:6',
            'captchaKey' => 'required',
            'captcha' => 'required|captcha_api:' . $request->input('captchaKey'),
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'captcha.captcha_api' => trans('modules.user::validation.The captcha is not correct'),
        ];
    }
}
