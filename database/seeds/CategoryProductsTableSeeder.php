<?php

use App\CategoryProduct;
use Illuminate\Database\Seeder;

class CategoryProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Xách Tay';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Để Bàn';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Mới';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Cũ';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Xuất Khẩu';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Like New';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính American';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Japan';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính China';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Argentina';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Portugal';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();

        $categoryProducts = new CategoryProduct();
        $categoryProducts->name = 'Máy Tính Việt Nam';
        $categoryProducts->sum_amount = '100';
        $categoryProducts->Save();
    }
}
