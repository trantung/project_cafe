<?php

namespace APV\User\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\User\Requests\DeleteUserCreditCardRequest;
use APV\User\Requests\RegisterUserCreditCardRequest;
use APV\User\Services\UserCreditCardService;
use DB;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use APV\User\Constants\UserResponseCode;

/**
 * Class UserCreditCardApiController
 * @package APV\User\Http\Controllers\API
 */
class UserCreditCardApiController extends ApiBaseController
{
    /**
     * @var UserCreditCardService
     */
    protected $userCreditCardService;

    /**
     * UserCreditCardApiController constructor.
     * @param UserCreditCardService $userCreditCardService
     */
    public function __construct(UserCreditCardService $userCreditCardService)
    {
        $this->userCreditCardService = $userCreditCardService;
    }

    /**
     * Get top of credit card
     * @return JsonResponse
     */
    public function getTopOfCreditCard()
    {
        $user = Auth::user();

        return $this->sendSuccess($this->userCreditCardService->getTopOfCreditCard($user));
    }

    /**
     * Register user credit card
     * @param RegisterUserCreditCardRequest $request
     * @return JsonResponse
     */
    public function register(RegisterUserCreditCardRequest $request)
    {
        $input = $request->only([
            'card_number',
            'expiration_month',
            'expiration_year',
        ]);

        if ($input['expiration_year'] == date('y') && (int)$input['expiration_month'] < (int)date('m')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_EXPIRATION_INVALID);
        }

        $input['user_id'] = Auth::id();

        return $this->sendSuccess($this->userCreditCardService->create($input));
    }

    /**
     * Delete user credit card
     * @param DeleteUserCreditCardRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function delete(DeleteUserCreditCardRequest $request)
    {
        $input = $request->only([
            'credit_card_id',
        ]);

        DB::beginTransaction();
        try {
            if (!$this->userCreditCardService->checkOwner($input['credit_card_id'])) {
                return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
            }

            $this->userCreditCardService->delete($input['credit_card_id']);

            DB::commit();
            return $this->sendSuccess(null);
        } catch (Exception $e) {
            DB::rollback();
            DB::disconnect('mysql');
            unset($input);
            unset($this->userCreditCardService);
            Log::error($e->getMessage());
            return $this->sendError(UserResponseCode::ERROR_CODE_SOMETHING_WENT_WRONG);
        }
    }
}
