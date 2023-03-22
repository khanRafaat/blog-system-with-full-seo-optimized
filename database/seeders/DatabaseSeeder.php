<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AssignRole::class);
        $this->call(NewslettersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(AssignPermissionsToRole::class);
        $this->call(HomeContent::class);

        // \App\Models\User::factory(3)->create();
        // // \App\Models\Category::factory(10)->create();
        // \App\Models\Newsletter::factory(30)->create();
    }
}