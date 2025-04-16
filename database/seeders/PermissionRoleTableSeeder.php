<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

final class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return ! str_starts_with($permission->title, 'user_') && ! str_starts_with($permission->title, 'role_') && ! str_starts_with($permission->title, 'permission_');
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);
    }
}
