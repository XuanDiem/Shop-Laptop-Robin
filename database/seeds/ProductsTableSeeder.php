<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Laptop Dell';
        $product->amount = 1;
        $product->price = 10000000;
        $product->category_product_id = 1;
        $product->image = '/images/dell.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop HP';
        $product->amount = 1;
        $product->price = 10000000;
        $product->category_product_id = 2;
        $product->image = '/images/hp.jpeg';
        $product->save();

        $product = new Product();
        $product->name = ' Apple Macbook Pro';
        $product->amount = 1;
        $product->price = 40000000;
        $product->category_product_id = 3;
        $product->image = '/images/macbookpro.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop SamSung';
        $product->amount = 1;
        $product->price = 10000000;
        $product->category_product_id = 4;
        $product->image = '/images/samsung.jpeg';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop ThinkPad';
        $product->amount = 1;
        $product->price = 10000000;
        $product->category_product_id = 5;
        $product->image = '/images/thinkpad.jpeg';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop Dell Inspiron 5577';
        $product->amount = 1;
        $product->price = 15000000;
        $product->category_product_id = 6;
        $product->image = '/images/dell-Inspiron-55-77.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Macbook Pro October 2019';
        $product->amount = 1;
        $product->price = 50000000;
        $product->category_product_id = 7;
        $product->image = '/images/Macbook-Pro-October.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Macbook Air 2019';
        $product->amount = 1;
        $product->price = 20000000;
        $product->category_product_id = 8;
        $product->image = '/images/Macbook-Air-2019.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop Msi';
        $product->amount = 1;
        $product->price = 10000000;
        $product->category_product_id = 9;
        $product->image = '/images/laptopMsi.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop Acer';
        $product->amount = 1;
        $product->price = 10000000;
        $product->category_product_id = 10;
        $product->image = '/images/acer.jpeg';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop Acer Predator';
        $product->amount = 1;
        $product->price = 10000000;
        $product->category_product_id = 11;
        $product->image = '/images/acer-Predator.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Laptop Asus';
        $product->amount = 1;
        $product->price = 15000000;
        $product->category_product_id = 12;
        $product->image = '/images/asus.jpg';
        $product->save();

    }
}
