<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'name' => 'Ardi Ramadani Zarqoni',
            'username' => 'haratlalu',
            'email' => 'ndaharatlo672@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('rahasia'),
            'remember_token' => Str::random(50),
        ]);
    }
}
