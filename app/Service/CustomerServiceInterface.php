<?php /** @noinspection ALL */


namespace App\Service;


use http\Env\Request;

interface CustomerServiceInterface
{
    public function getAll();

    public function store($request);

    public function show($id);

    public function findById($id);

    public function update($request, $id);

    public function destroy($id);
}
