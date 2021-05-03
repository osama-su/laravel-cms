<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        //create roles
        $adminRole = Role::create(['name' => 'super-admin']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $userRole = Role::create(['name' => 'writer']);

        //assign existing permissions
        $adminRole->givePermissionTo(Permission::all());
        $moderatorRole->givePermissionTo('edit articles');
        $userRole->givePermissionTo('edit articles');

        // create demo users
        $superAdmin = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@tech.com',
            'password' => bcrypt('123456'),
        ]);
        $moderator = \App\Models\User::factory()->create([
            'name' => 'Moderator',
            'email' => 'moderator@tech.com',
            'password' => bcrypt('123456'),
        ]);
        $user = \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@tech.com',
            'password' => bcrypt('123456'),
        ]);
        //attach roles to user
        $superAdmin->assignRole($adminRole);
        $moderator->assignRole($moderatorRole);
        $user->assignRole($userRole);
    }
}
