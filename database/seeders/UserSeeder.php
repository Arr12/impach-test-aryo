<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Administrator Digital',
            'email' => 'admindigital@example.com',
            'password' => bcrypt('12345678'),
            'roles' => 'digital'
        ]);
        User::create([
            'name' => 'Administrator Manual',
            'email' => 'adminmanual@example.com',
            'password' => bcrypt('12345678'),
            'roles' => 'manual'
        ]);
        User::create([
            'name' => 'Administrator Semi Manual',
            'email' => 'adminsemi@example.com',
            'password' => bcrypt('12345678'),
            'roles' => 'semi_manual'
        ]);
    }
}