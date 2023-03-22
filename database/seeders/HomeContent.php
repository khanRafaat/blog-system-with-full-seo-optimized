<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeContent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_contents')->insert([
            'section' => 'Home H1',
            'content' => 'The Live Wiki : Trendy, Media, Tech, World & All Latest from Wiki Learns',
        ]);
        DB::table('home_contents')->insert([
            'section' => 'Home p',
            'content' => '"Wiki Learns" is a trusted multi-blog platform for millions of users worldwide. We provide up-to-date information on cool tech gadgets, the latest media trends, travel updates, and so on. Stay tuned to Wiki Lives for the most recent updates.',
        ]);
        DB::table('home_contents')->insert([
            'section' => 'Home H2',
            'content' => 'All About You Photography : Ways to Get Trusted Reviews & Buying Guide for Your Daily Needs',
        ]);
        DB::table('home_contents')->insert([
            'section' => 'Home H3',
            'content' => 'Travel is an Investment in Yourself : When I travel, there are no rules with my diet.',
        ]);
    }
}
