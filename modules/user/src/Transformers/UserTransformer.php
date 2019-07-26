<?php

namespace APV\User\Transformers;

use APV\User\Models\User;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

/**
 * Class UserTransformer
 *
 * @package APV\User\Transformers
 */
class UserTransformer extends TransformerAbstract
{
    /**
     * Transform the User entity.
     *
     * @param User $user
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id' => (int) $user->id,
            'username' => $user->username,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'receive_news' => $user->receive_news,
            'actived' => $user->actived,
            'created_at' => Carbon::parse($user->created_at)->toDateTimeString(),
            'updated_at' => Carbon::parse($user->updated_at)->toDateTimeString(),
        ];
    }
}
