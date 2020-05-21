<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Profile::create([
            'user_id' => 1,
            'image' => 'testuser',
            'about' => 'Something to know about the user',
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'whatsapp' => '',
        ]);

        \App\Profile::create([
            'user_id' => 2,
            'image' => 'testuser',
            'about' => 'Something to know about the user',
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'whatsapp' => '',
        ]);
    }
}
