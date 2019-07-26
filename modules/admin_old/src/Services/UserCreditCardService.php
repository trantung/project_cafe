<?php

namespace APV\User\Services;

use APV\User\Models\User;
use APV\User\Models\UserCreditCard;
use APV\Base\Services\BaseService;
use APV\User\Transformers\UserCreditCardTransformer;
use Auth;

/**
 * Class UserCreditCardService
 * @package APV\User\Services
 */
class UserCreditCardService extends BaseService
{
    /**
     * @var UserCreditCardTransformer
     */
    private $userCreditCardTransformer;

    /**
     * UserCreditCardService constructor.
     * @param UserCreditCard $model
     * @param UserCreditCardTransformer $userCreditCardTransformer
     */
    public function __construct(UserCreditCard $model, UserCreditCardTransformer $userCreditCardTransformer)
    {
        parent::__construct($model);
        $this->userCreditCardTransformer = $userCreditCardTransformer;
    }

    /**
     * Store a newly created resource in storage
     * @param array $arrData
     * @return array
     */
    public function create($arrData)
    {
        $userCreditCard = $this->model->create($arrData);

        return $this->userCreditCardTransformer->transform($userCreditCard);
    }

    /**
     * Get top of credit card
     * @param User $user
     * @return array
     */
    public function getTopOfCreditCard(User $user)
    {
        $cardArr = [];
        foreach ($user->userCreditCards as $card) {
            array_push($cardArr, $this->userCreditCardTransformer->transform($card));
        }

        return $cardArr;
    }

    /**
     * Check auth user is card's owner
     * @param $creditCardId
     * @return bool
     */
    public function checkOwner($creditCardId)
    {
        $card = $this->model->findOrFail($creditCardId);

        return $card->user_id == Auth::id();
    }

    /**
     * Delete user credit card
     * @param $creditCardId
     */
    public function delete($creditCardId)
    {
        $this->model->findOrFail($creditCardId)->delete();
    }
}
