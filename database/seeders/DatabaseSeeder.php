<?php

namespace Database\Seeders;

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


        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'candidate']);
        $role = Role::create(['name' => 'employer']);
        $role = Role::create(['name' => 'guest']);
        $role->givePermissionTo(Permission::all());

        $this->call(UserSeeder::class);
         \App\Models\User::factory(100)->create();
         $this->call(StateSeeder::class);
         \App\Models\Post::factory(130)->create();




    }
}
