<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Vu Xuan Diem';
        $user->email = 'xuandiem123@gmail.com';
        $user->password = Hash::make('12345678');
        $user->role = '1';
        $user->save();
        $user = new User();
        $user->name = 'Cristiano Ronaldo';
        $user->email = 'ronaldocr7@gmail.com';
        $user->password = Hash::make('12345678');
        $user->role = '2';
        $user->save();
    }
}
