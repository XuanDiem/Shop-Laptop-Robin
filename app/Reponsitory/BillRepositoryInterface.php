<?php


namespace App\Reponsitory;


interface BillRepositoryInterface
{

    public function getAll();

    public function create();

    public function store($request);

    public function show($id);

    public function edit($id);

    public function update($id);

    public function destroy($id);
}
