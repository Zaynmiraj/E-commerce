<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->sku = 'PROD' . uniqid(); // You can customize the SKU generation logic here
        });
    }

}