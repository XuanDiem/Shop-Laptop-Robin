<?php


namespace App\Reponsitory\Impl;


use App\Product;
use App\Reponsitory\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function getAll()
    {
        $products = Product::all();
        return $products;
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return $products;
    }
}
