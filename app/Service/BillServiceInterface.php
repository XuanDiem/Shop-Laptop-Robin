<?php


namespace App\Service;


use http\Env\Request;

interface BillServiceInterface
{
public function getAll();
public function create();
public function store($request);
public function show($id);
public function edit($id);
public function update($id);
public function destroy($id);
}
