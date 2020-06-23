<?php
  
  namespace APV\Product\Models;
  
  use Illuminate\Database\Eloquent\Model;
   
class GroupOptionProduct extends Model
{
    protected $table = 'group_option_product';
    protected $fillable = [
        "product_id",
        "group_option_id",
        "type",
        "type_show",
    ];
    
}