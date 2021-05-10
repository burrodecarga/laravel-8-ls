<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $admin = Role::create(['name' =>'admin']);
        $candidate = Role::create(['name' =>'candidate']);
        $employer = Role::create(['name' =>'employer']);
        $guest = Role::create(['name' =>'guest']);

        $permissions = ['show','create','edit','update','delete'];

        foreach (Role::all() as $role){
            foreach($permissions as $p){
                Permission::create(['name'=>"{$role->name} $p"]);
            }}

            $admin->syncPermissions(Permission::all());
            $employer->syncPermissions(Permission::where('name','like',"%employer%"));
            $candidate->syncPermissions(Permission::where('name','like',"%candidate%"));
            $guest->syncPermissions(Permission::where('name','like',"%guest%"));




        $candidate =User::create([
            'name' => 'Candidate Henriquez',
            'email' => 'candidate@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10)]);

        $employer =User::create([
                'name' => 'Employer Henriquez',
                'email' => 'employer@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'remember_token' => Str::random(10)]);

        $guest =User::create([
                    'name' => 'Guest Henriquez',
                    'email' => 'guest@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('123'),
                    'remember_token' => Str::random(10)]);

         $admin =User::create([
                        'name' => 'Admin Henriquez',
                        'email' => 'admin@gmail.com',
                        'email_verified_at' => now(),
                        'password' => bcrypt('123'),
                        'remember_token' => Str::random(10)]);





        $this->call(UserSeeder::class);
         \App\Models\User::factory(100)->create();
         $this->call(StateSeeder::class);
         \App\Models\Post::factory(130)->create();




    }
}
