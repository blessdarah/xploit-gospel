<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create default site admin
        \App\User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('adminpassword'),
            'is_admin' => 1
        ]);

        // Create a single default user
        \App\User::create([
            'name' => 'testuser',
            'email' => 'user@test.com',
            'password' => bcrypt('testuser1'),
        ]);
    }
}
