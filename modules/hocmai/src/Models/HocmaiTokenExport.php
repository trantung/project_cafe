<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiTokenExport extends Model
{
    /**
     * @var string
     */
    protected $table = 'hocmai_token_exports';
    protected $fillable = [
        'token'
    ];
}
