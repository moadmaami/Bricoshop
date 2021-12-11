<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            //manager
            [
                'first_name' => 'Amine',
                'last_name' => 'Maami',
                'username' => 'Amine_Maami',
                'email' => 'amine@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'manager',
                'status' => 'active'
            ],
            //admin
            [
                'first_name' => 'Moad',
                'last_name' => 'Maami',
                'username' => 'Moad_Maami',
                'email' => 'moad@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active'
            ],
            //customer
            [
                'first_name' => 'Mohamed',
                'last_name' => 'Maami',
                'username' => 'Mohamed_Maami',
                'email' => 'mohamed@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'customer',
                'status' => 'active'
            ],
        ]);
    }
}
