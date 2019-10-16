<?php /** @noinspection ALL */


namespace App\Reponsitory;


use http\Env\Request;

interface CustomerRepositoryInterface
{
    public function getAll();

    public function store($customer);

    public function show($id);

    public function findById($id);

    public function update($customer);

    public function destroy($id);
}
