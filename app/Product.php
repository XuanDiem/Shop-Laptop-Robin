<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function bills()
    {
        return $this->belongsToMany(Bill::class, 'bills_products', 'product_id',
            'bill_id');
    }

    public function category_product()
    {
        return $this->belongsTo(CategoryProduct::class);
    }
}
