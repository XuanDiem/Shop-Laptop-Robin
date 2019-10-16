<?php


namespace App\Reponsitory\Impl;


use App\Bill;
use App\Reponsitory\BillRepositoryInterface;

class BillRepository implements BillRepositoryInterface
{

    public function getAll()
    {
        $bills = Bill::all();
        return $bills;
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        $bill = Bill::find($id);
        return $bill;
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        $bill = Bill::find($id);
        $bill->delete();
        return $bill;
    }
}
