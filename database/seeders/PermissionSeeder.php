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


        $permissions = [
            'view_shifts',
            'start_shifts',
            'clock_in_and_out',
            'manage_tasks',
            'post_to_news_feed',
            'schedule_team_members',
            'approve_timesheets',
            'approve_leave_requests',
            'create_journals',
            'add_edit_team_members',
            'view_team_member_costs',
            'export_timesheets',
            'access_reports',
            'set_up',
            'kiosk',
            'edit_locations',
            'manage_integrations',
            'create_locations'
        ];
        foreach ($permissions as $permissionName) {
            $permission = Permission::firstOrCreate(['name' => $permissionName]);
        }


        $roles = [
            "employee" => [
                'view_shifts',
                'start_shifts',
                'clock_in_and_out',
                'manage_tasks',
                'post_to_news_feed'
            ],
            "supervisor" => [
                'view_shifts',
                'start_shifts',
                'clock_in_and_out',
                'manage_tasks',
                'post_to_news_feed',
                'schedule_team_members',
                'approve_timesheets',
                'approve_leave_requests',
                'create_journals',
            ],
            "location_manager" => [
                'view_shifts',
                'start_shifts',
                'clock_in_and_out',
                'manage_tasks',
                'post_to_news_feed',
                'schedule_team_members',
                'approve_timesheets',
                'approve_leave_requests',
                'create_journals',
                'add_edit_team_members',
                'view_team_member_costs',
                'export_timesheets',
                'access_reports',
                'set_up',
                'kiosk',
                'edit_locations',
                'manage_integrations',
            ],
            "advisor" => [
                'view_shifts',
                'add_edit_team_members',
                'view_team_member_costs',
                'export_timesheets',
                'access_reports',
                'set_up',
                'kiosk',
                'edit_locations',
                'manage_integrations',
                'create_locations'
            ],
            "system_administrator" => $permission
        ];



        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->syncPermissions($rolePermissions);
        }

        $user = User::firstOrCreate([
            'email' => 'admin@example.com',

        ], [
            'name' => 'Admin',
            'password' => Hash::make('adminpass'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

        if ($user->wasRecentlyCreated) {
            $user->assignRole('system_administrator');
        }
    }
}
