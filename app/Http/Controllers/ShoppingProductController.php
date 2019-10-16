<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShoppingProductController extends Controller
{
    public function detail($id)
    {
        $product = Product::find($id);
        return view('guest.product.detail', compact('product'));
    }
}
