<?php

namespace APV\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserReasonToLeave
 * @package APV\User\Models
 */
class UserReasonToLeave extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'user_reason_to_leaves';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type',
        'detail',
    ];

    /**
     * Get user of this reason leaving record
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
