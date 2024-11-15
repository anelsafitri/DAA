<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure roles exist
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
       
        // Assign roles to specific users based on email
        
        $adminUser = User::where('email', 'admin@admin.com')->first();

        if ($adminUser) {
            if (!$adminUser->hasRole($adminRole->name)) {
                $adminUser->assignRole($adminRole);
                $this->command->info('Role "Admin" assigned to ' . $adminUser->email);
            } else {
                $this->command->warn($adminUser->email . ' already has the "Admin" role.');
            }
        } else {
            $this->command->warn('User with email "admin@admin.com" not found. Skipping Admin role assignment.');
        }
    }
}
