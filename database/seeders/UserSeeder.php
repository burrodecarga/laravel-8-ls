<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =User::create([
            'name' => 'Edwin Henriquez',
            'email' => 'ed@gmail.com',
            'role' => 'super-admin',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10)]);
    }
}
