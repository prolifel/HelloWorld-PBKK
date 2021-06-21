<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@user.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Admin Bumdes',
                'email' => 'bumdesbendiljatiwetan@gmail.com',
                'password' => Hash::make('bumdes2020'),
            ],
            [
                'name' => 'Administrator',
                'email' => 'Adminstrator',
                'password' => Hash::make('134567890'),
            ]
        ]);
    }
}
