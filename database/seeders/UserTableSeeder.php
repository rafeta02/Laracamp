<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@laracamp',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('password'),
            'is_admin' => true
        ]);
    }
}
