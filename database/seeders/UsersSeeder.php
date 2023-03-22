<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Adminstrator',
            'lname' => 'Admin Last Name',
            'email' => 'admin@wikilearns.com',
            'orginalemail' => 'admin@mail.com',
            'position' => 'Inhouse',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'fname' => 'Editor First Name',
            'lname' => 'Editor Last Name',
            'email' => 'editor@wikilearns.com',
            'orginalemail' => 'editor@mail.com',
            'position' => 'Inhouse',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'fname' => 'Writer one',
            'lname' => 'Inhouse',
            'email' => 'writer1@wikilearns.com',
            'orginalemail' => 'writer1@mail.com',
            'position' => 'Inhouse',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'fname' => 'Writer Two',
            'lname' => 'Contractual',
            'email' => 'writer2@wikilearns.com',
            'orginalemail' => 'writer2@mail.com',
            'position' => 'Contractual',
            'password' => bcrypt('123456'),
        ]);
    }
}
