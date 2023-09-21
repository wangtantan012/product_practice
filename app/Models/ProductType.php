<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';
    protected $fillable = ['name', 'desc' ];

    public function ProductTypeImg()
    {
        return $this->hasMany(ProductTypeImg::class,'Product_type_id','id');
    }


}
