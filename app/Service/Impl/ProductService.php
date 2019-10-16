<?php


namespace App\Service\Impl;


use App\Reponsitory\Impl\ProductRepository;
use App\Service\ProductServiceInterface;

class ProductService implements ProductServiceInterface
{
    public $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepository->getAll();
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
        return $this->productRepository->show($id);
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
        return $this->productRepository->destroy($id);
    }
}
