<?php /** @noinspection ALL */


namespace App\Reponsitory\Impl;


use App\Customer;
use App\Employee;
use App\Reponsitory\CustomerRepositoryInterface;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function getAll()
    {
        $customers = Customer::all();
//        $customers = DB::table('customers')->get();
        return $customers;
    }

    public function store($customer)
    {
        $customer->save();
        return $customer;
    }

    /**
     * @param $customer
     * @param $id
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $customer->save();
        return $customer;
    }

    public function findById($id)
    {
        return Customer::find($id);
    }

    public function update($customer)
    {
        return $customer->save();
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return $customer;
    }
}
