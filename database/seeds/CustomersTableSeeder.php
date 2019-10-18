<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $customer = new Customer();
        $customer->name = 'Vũ Xuân Diệm';
        $customer->email = 'xuandiem10@gmail.com';
        $customer->address = 'Việt Nam';
        $customer->phone = '123456789';
        $customer->gender = 'male';
        $customer->image = 'vuxuandiem123.jpg';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Cristiano.Ronaldo';
        $customer->email = 'ronaldo7@gmail.com';
        $customer->address = 'Pogtugal';
        $customer->phone = '123456789';
        $customer->gender = 'male';
        $customer->image = 'ronaldo.jpg';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Lionel.Messi';
        $customer->email = 'messi10@gmail.com';
        $customer->address = 'Argentina';
        $customer->phone = '123456789';
        $customer->gender = 'male';
        $customer->image = 'messi.png';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Nguyễn Quang Hải';
        $customer->email = 'nguyenquạnghai10@gmail.com';
        $customer->address = 'Việt Nam';
        $customer->phone = '123456789';
        $customer->gender = 'male';
        $customer->image = 'quanghai.jpeg';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Nguyễn Thu Trang';
        $customer->email = 'thutrang123@gmail.com';
        $customer->address = 'Việt Nam';
        $customer->phone = '123456789';
        $customer->gender = 'female';
        $customer->image = 'thutrang.jpg';
        $customer->save();

    }

}
