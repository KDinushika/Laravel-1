<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'admin'

            ],

              [
                'name' => 'vendor',
                'email' => 'vendor@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'vendor'

              ],
               [
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'customer'

              ]
              
              ]);
    }
}
