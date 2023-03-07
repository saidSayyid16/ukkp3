<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'nama'  => 'admin',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'outlets_id' => '1'
            ],
            [
                'nama' => 'kasir',
                'username' => 'kasir',
                'password' => bcrypt('kasir'),
                'role' => 'kasir',
                'outlets_id' => '1'
            ],
            [
                'nama' => 'owner',
                'username' => 'owner',
                'password' => bcrypt('owner'),
                'role' => 'owner',
                'outlets_id' => '1'
            ]
            ];

            foreach ($users as $key => $value) {
            User::create($value);
            }
    }
}
