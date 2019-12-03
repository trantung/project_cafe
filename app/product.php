<?php
  
  namespace App;
  
  use Illuminate\Database\Eloquent\Model;
   
class Product extends Model
{
    
    protected $fillable = [
        "duration_time",
        "close_time",
        "open_time",
        "status",
        "avatar",
        "weight_number",
        "description",
        "print_view",
        "barcode",
        "code",
        "price_pay",
        "price_origin",
        "name",
        "category_id",
        'image',
        "created_at",
        "updated_at",
        "deleted_at",
    ];
    public function parentProduct()
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }
    
}