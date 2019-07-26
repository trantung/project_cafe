<?php

namespace APV\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RegisterUserCreditCardRequest
 * @package APV\User\Requests
 */
class RegisterUserCreditCardRequest extends FormRequest
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
        $monthList = array_map(function ($value) {
            return $value<10 ? '0'.$value : ''.$value;
        }, range(1, 12));

        $intCurrentDate = (int) date('y');
        $yearList = array_map(function ($value) {
            return $value<10 ? '0'.$value : ($value>99 ? substr(''.$value, 1) : ''.$value);
        }, range($intCurrentDate, $intCurrentDate + 20));

        return [
            'card_number' => 'required|string|regex:/^[0-9]+$/|min:13|max:19|' .
                'unique:user_credit_cards,card_number,NULL,id,deleted_at,NULL',
            'expiration_month' => 'required|in:' . implode(',', $monthList),
            'expiration_year' => 'required|in:' . implode(',', $yearList),
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'card_number.regex' =>
                trans('modules.user::validation.The card number must contain only numeric characters'),
        ];
    }
}
