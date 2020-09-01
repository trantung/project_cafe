<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiDistrict extends Model
{
    /**
     * @var string
     */
    protected $table = 'hocmai_districts';
    protected $fillable = [
        'name', 'city_id'
    ];
}
