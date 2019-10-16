<?php

use App\Bill;
use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill = new Bill();
        $bill->date_pay = '24/9/2019';
        $bill->customer_id = '1';
        $bill->totalPrice = 30000000;
        $bill->totalAmount = 3;
        $bill->save();

        $bill = new Bill();
        $bill->date_pay = '20/9/2019';
        $bill->customer_id = '2';
        $bill->totalPrice = 10000000;
        $bill->totalAmount = 1;
        $bill->save();

        $bill = new Bill();
        $bill->date_pay = '22/9/2019';
        $bill->customer_id = '3';
        $bill->totalPrice = 10000000;
        $bill->totalAmount = 1;
        $bill->save();

        $bill = new Bill();
        $bill->date_pay = '26/9/2019';
        $bill->customer_id = '4';
        $bill->totalPrice = 10000000;
        $bill->totalAmount = 1;
        $bill->save();

        $bill = new Bill();
        $bill->date_pay = '25/9/2019';
        $bill->customer_id = '5';
        $bill->totalPrice = 10000000;
        $bill->totalAmount = 1;
        $bill->save();
    }
}
