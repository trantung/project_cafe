<?php

namespace APV\User\Services;

use APV\User\Models\Auth\PasswordReset;
use APV\Base\Services\BaseService;
use Illuminate\Support\Str;

/**
 * Class PasswordResetService
 * @package APV\User\Services
 */
class PasswordResetService extends BaseService
{
    /**
     * PasswordResetService constructor
     * @param PasswordReset $model
     */
    public function __construct(PasswordReset $model)
    {
        parent::__construct($model);
    }

    /**
     * Update or create new resource in storage
     * @param $email
     * @return PasswordReset
     */
    public function updateOrCreate($email)
    {
        return $this->model->updateOrCreate(
            ['email' => $email],
            ['token' => Str::random(60)]
        );
    }

    /**
     * Find password reset record by token
     * @param $token
     * @return PasswordReset
     */
    public function findByToken($token)
    {
        return $this->model->where('token', $token)->first();
    }
}
