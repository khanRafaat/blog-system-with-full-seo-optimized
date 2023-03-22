<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'user_management',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'user_create',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'user_edit',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'user_delete',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'role_management',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'role_create',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'role_edit',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'role_delete',
            'guard_name' => 'web',
        ]);
       
        Permission::create([
            'name' => 'contact_us_inbox',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'bewriter_view',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'bewriter_add',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'bewriter_delete',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'contact_us_view',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'contact_us_delete',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'category',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'category_add',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'category_edit',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'category_delete',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'blog_post_create',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'blog_post_own',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'blog_post_all',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'newsletter',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'advertisement',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'home_content',
            'guard_name' => 'web',
        ]);
    }
}
