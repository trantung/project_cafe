<?php
  
  namespace APV\Product\Models;
  
  use Illuminate\Database\Eloquent\Model;
   
class GroupOption extends Model
{
    protected $table = 'group_options';
    protected $fillable = [
        "name",
    ];
    
}