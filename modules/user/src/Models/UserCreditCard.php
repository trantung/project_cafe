<?php

namespace APV\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserCreditCard
 * @package APV\User\Models
 */
class UserCreditCard extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'user_credit_cards';

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
        'card_number',
        'expiration_month',
        'expiration_year',
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
