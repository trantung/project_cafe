<?php

namespace APV\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeleteUserCreditCardRequest
 * @package APV\User\Requests
 */
class DeleteUserCreditCardRequest extends FormRequest
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
            'credit_card_id' => 'required|exists:user_credit_cards,id',
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
