<?php

namespace APV\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserPointHistory
 * @package APV\User\Models
 */
class UserPointHistory extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'user_point_histories';

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
        'point',
        'type'
    ];

    /**
     * Get user of this user point record
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
