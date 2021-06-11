<?php

namespace Database\Seeders;


use App\Models\Experience;
use App\Models\Knowledge;
use App\Models\Message;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Response;
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








        $guest = User::create([
            'name' => 'Guest Henriquez',
            'email' => 'guest@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10)
        ]);







        $this->call(UserSeeder::class);
        $this->call(StateSeeder::class);
        User::factory(100)->has(Profile::factory())
            ->has(Experience::factory(5))
            ->has(Knowledge::factory(8))
            ->has(Message::factory(4))
            ->create();

        Response::factory(120)->create();

        Post::factory(130)->create();

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $admin = Role::create(['name' => 'admin']);
        $admin->syncPermissions(Permission::all());

        $candidate = Role::create(['name' => 'candidate']);
        $employer = Role::create(['name' => 'employer']);
        $guest = Role::create(['name' => 'guest']);


        $user = User::create([
            'name' => 'Edwin Henriquez',
            'email' => 'ed@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10)
        ]);
        $user->assignRole('super-admin');

        $user = User::create([
            'name' => 'Administrado General',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10)
        ]);
        $user->assignRole('admin');



        $candidate = User::create([
            'name' => 'Candidate Henriquez',
            'email' => 'candidate@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10)
        ]);
        $candidate->assignRole('candidate');

        for ($i = 1; $i < 11; $i++) {
            $candidate = User::create([
                'name' => 'Candidate Number-' . $i,
                'email' => 'candidate' . $i . '@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'remember_token' => Str::random(10)
            ]);
            $candidate->assignRole('candidate');
        }

        for ($i = 1; $i < 11; $i++) {
            $employer = User::create([
                'name' => 'Employer Number :-' . $i,
                'email' => 'employer' . $i . '@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'remember_token' => Str::random(10)
            ]);
            $employer->assignRole('employer');
        }


        $employer = User::create([
            'name' => 'Employer Henriquez',
            'email' => 'employer@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10)
        ]);

        $employer->assignRole('employer');
    }
}
