<?php

namespace App\Models\Custom_Fieldes;

use App\Models\Products\Product;
use App\Models\Stores\StoreProductDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom_Field_Value extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'custom_field_value';
    protected $fillable = ['custom_field_value_id', 'value', 'updated_at', 'created_at'];
    protected $hidden = [
        'created_at', 'updated_at', 'pivot'
    ];

    public function Custom_field()
    {
        return $this->belongsTo(Custom_Field::class, 'custom_field_id');
    }

    public function Product()
    {
        return $this->belongsToMany(Product::class,
            'products_custom_field_value',
            'custom_field_value_id',
            'product_id'
        );
    }

    public function StoreProductDetails(){
        return $this->belongsToMany(StoreProductDetails::class,
            'details_custom_values',
            'custom_field_value_id',
            'store_products_details_id');
    }
}
