<?php


namespace App\Reponsitory;


interface ProductRepositoryInterface
{
public function getAll();
public function create();
public function store();
public function show($id);
public function edit($id);
public function update();
public function destroy($id);
}
