<?php /** @noinspection ALL */


namespace App\Service\Impl;


use App\Reponsitory\BillRepositoryInterface;
use App\Service\BillServiceInterface;
use http\Env\Request;


class BillService implements BillServiceInterface
{

    public $billRepository;

    public function __construct(BillRepositoryInterface $billRepository)
    {
        $this->billRepository = $billRepository;
    }

    public function getAll()
    {
        return $this->billRepository->getAll();
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
        return $this->billRepository->show($id);
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
        return $this->billRepository->destroy($id);
    }
}
