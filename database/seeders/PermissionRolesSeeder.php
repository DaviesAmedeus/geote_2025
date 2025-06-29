<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $permissions = [
            // Super Admin
            'view_users', 'create_users', 'update_users', 'delete_users',
            'view_roles', 'assign_roles',
            'view_projects', 'delete_projects',
            'view_applications', 'delete_applications',
            'view_staffs', 'update_staffs',
            'view_dashboard', 'view_statistics',

            // Staffs
            'create_projects', 'view_own_projects', 'update_own_projects', 'delete_own_projects','update_own_profile',

            // Members
        ];


        // Creating the permission
        foreach($permissions as $permission){
            Permission::firstOrCreate(['name'=>$permission]);
        }

        $allPermissions = Permission::all();

        // Creating Roles
        $superAdmin = Role::create(['name'=>'superAdmin']);
        $staff = Role::create(['name'=>'staff']);


        // Giving Different Permissions to different roles
        $superAdmin->givePermissionTo($allPermissions);

        $staff->givePermissionTo([
            'create_projects', 'view_own_projects', 'update_own_projects', 'delete_own_projects','update_own_profile',
        ]);


        // Creating the user who is the superadmin with all permissions
        $user = User::create([
            'name'=> 'Super Admin',
            'email'=> 'superadmin@geote.org',
            'role'=> 'superAdmin',
            'password' =>Hash::make('superadmin@2025'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole($superAdmin);
    }
}
