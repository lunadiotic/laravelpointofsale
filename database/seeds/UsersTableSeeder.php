<?php

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
        DB::table('users')->insert([
           'name' => 'Administrator',
           'email' => 'admin@mail.com',
           'password' => bcrypt('password'),
           'photo' => 'image/users/admin.png',
           'level' =>  1
        ], [
            'name' => 'Cashier',
            'email' => 'cashier@mail.com',
            'password' => bcrypt('password'),
            'photo' => 'image/users/cashier.png',
            'level' =>  2
        ]);
    }
}
