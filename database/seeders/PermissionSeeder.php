<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate([
            'email' => 'admin@example.com',

        ], [
            'name' => 'Admin',
            'password' => Hash::make('adminpass'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

        if ($user->wasRecentlyCreated) {
            $roles = [
                'admin' => ['View Users', 'Create Users', 'Edit Users', 'Delete Users', 'Manage Resources'],
                'manager' => ['View Users', 'Create Users', 'Edit Users', 'Manage Resources'],
                'user' => []
            ];

            foreach ($roles as $roleName => $permissions) {
                $role = Role::firstOrCreate(['name' => $roleName]);

                foreach ($permissions as $permissionName) {
                    $permission = Permission::firstOrCreate(['name' => $permissionName]);
                    $role->givePermissionTo($permission);
                }
            }
            $user->assignRole('admin');
        }
    }
}
