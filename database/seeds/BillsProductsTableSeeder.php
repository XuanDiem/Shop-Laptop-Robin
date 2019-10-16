<?php

use App\Bill;
use App\Product;
use Illuminate\Database\Seeder;

class BillsProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $billProduct = Bill::find(1);
        $billProduct->products()->attach(1);
        $billProduct->products()->attach(3);
        $billProduct->products()->attach(4);

        $billProduct = Bill::find(2);
        $billProduct->products()->attach(1);

        $billProduct = Bill::find(3);
        $billProduct->products()->attach(2);

        $billProduct = Bill::find(4);
        $billProduct->products()->attach(5);

        $billProduct = Bill::find(5);
        $billProduct->products()->attach(3);

//        $billProduct = Product::find(4);
//        $billProduct->bills()->attach(1);


    }
}
