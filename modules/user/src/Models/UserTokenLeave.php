<?php

namespace APV\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class UserTokenLeave
 * @package APV\User\Models
 */
class UserTokenLeave extends Model
{
    /**
     * @var string
     */
    protected $table = 'user_token_leaves';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'token',
    ];

    /**
     * Get user of this token leaving record
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
