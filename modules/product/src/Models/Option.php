<?php
  
  namespace APV\Product\Models;
  
  use Illuminate\Database\Eloquent\Model;
   
class Option extends Model
{
    protected $table = 'options';
    protected $fillable = [
        "name",
        "status",
        "group_option_id",
    ];
    
}