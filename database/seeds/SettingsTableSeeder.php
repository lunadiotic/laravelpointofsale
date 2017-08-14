<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'company_name' => 'Point of Sale',
            'address' => '123 6th St.Melbourne, FL 32904',
            'phone' => '+62 123 456',
            'logo' => 'image/setting/logo.png',
            'member_card' => 'image/member/card.png',
            'member_discount' => '10',
            'note_type' => '0'
        ]);
    }
}
