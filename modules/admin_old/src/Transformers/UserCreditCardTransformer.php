<?php

namespace APV\User\Transformers;

use APV\User\Models\UserCreditCard;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

/**
 * Class UserCreditCardTransformer
 *
 * @package APV\User\Transformers
 */
class UserCreditCardTransformer extends TransformerAbstract
{
    /**
     * Transform the UserCreditCard entity.
     *
     * @param UserCreditCard $userCreditCard
     *
     * @return array
     */
    public function transform(UserCreditCard $userCreditCard)
    {
        $cardNumber = $userCreditCard->card_number;
        $hidden = strlen($cardNumber) == 16 ?
            str_repeat('XXXX-', 3) :
            str_repeat('X', strlen($cardNumber) - 4);
        $showCardNumber = $hidden . substr($cardNumber, -4);

        return [
            'id' => (int) $userCreditCard->id,
            'card_number' => $showCardNumber,
            'expiration_month' => $userCreditCard->expiration_month,
            'expiration_year' => $userCreditCard->expiration_year,
            'created_at' => Carbon::parse($userCreditCard->created_at)->toDateTimeString(),
            'updated_at' => Carbon::parse($userCreditCard->updated_at)->toDateTimeString(),
        ];
    }
}
