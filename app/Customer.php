<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $guarded = [];

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }
}
