<?php /** @noinspection ALL */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'bills_products', 'bill_id',
            'product_id');
    }
}
