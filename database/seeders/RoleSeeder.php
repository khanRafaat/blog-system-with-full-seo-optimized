<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([

            'name' => 'Editor',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name' => 'Writer Inhouse',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'Writer Contractual',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'Pending',
            'guard_name' => 'web',
        ]);
    }
}
