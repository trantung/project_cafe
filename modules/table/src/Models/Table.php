<?php
namespace APV\Table\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Table
 * @package APV\Table\Models
 */
class Table extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'tables';

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
        'id', 'level_id', 'name','qr_code', 'size', 'type', 'max_number_person', 'active', 'code'
    ];

}
