<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiCity extends Model
{
    /**
     * @var string
     */
    protected $table = 'hocmai_citys';
    protected $fillable = [
        'name'
    ];
}
