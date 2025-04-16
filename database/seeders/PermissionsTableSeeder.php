<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

final class PermissionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'user_management_access',
            ],
            [
                'id' => 2,
                'title' => 'permission_create',
            ],
            [
                'id' => 3,
                'title' => 'permission_edit',
            ],
            [
                'id' => 4,
                'title' => 'permission_show',
            ],
            [
                'id' => 5,
                'title' => 'permission_delete',
            ],
            [
                'id' => 6,
                'title' => 'permission_access',
            ],
            [
                'id' => 7,
                'title' => 'role_create',
            ],
            [
                'id' => 8,
                'title' => 'role_edit',
            ],
            [
                'id' => 9,
                'title' => 'role_show',
            ],
            [
                'id' => 10,
                'title' => 'role_delete',
            ],
            [
                'id' => 11,
                'title' => 'role_access',
            ],
            [
                'id' => 12,
                'title' => 'user_create',
            ],
            [
                'id' => 13,
                'title' => 'user_edit',
            ],
            [
                'id' => 14,
                'title' => 'user_show',
            ],
            [
                'id' => 15,
                'title' => 'user_delete',
            ],
            [
                'id' => 16,
                'title' => 'user_access',
            ],
            [
                'id' => 17,
                'title' => 'setting_create',
            ],
            [
                'id' => 18,
                'title' => 'setting_edit',
            ],
            [
                'id' => 19,
                'title' => 'setting_delete',
            ],
            [
                'id' => 20,
                'title' => 'setting_access',
            ],
            [
                'id' => 21,
                'title' => 'team_create',
            ],
            [
                'id' => 22,
                'title' => 'team_edit',
            ],
            [
                'id' => 23,
                'title' => 'team_delete',
            ],
            [
                'id' => 24,
                'title' => 'team_access',
            ],
            [
                'id' => 25,
                'title' => 'blog_create',
            ],
            [
                'id' => 26,
                'title' => 'blog_edit',
            ],
            [
                'id' => 27,
                'title' => 'blog_delete',
            ],
            [
                'id' => 28,
                'title' => 'blog_access',
            ],
            [
                'id' => 29,
                'title' => 'event_create',
            ],
            [
                'id' => 30,
                'title' => 'event_edit',
            ],
            [
                'id' => 31,
                'title' => 'event_delete',
            ],
            [
                'id' => 32,
                'title' => 'event_access',
            ],
            [
                'id' => 33,
                'title' => 'partner_create',
            ],
            [
                'id' => 34,
                'title' => 'partner_edit',
            ],
            [
                'id' => 35,
                'title' => 'partner_show',
            ],
            [
                'id' => 36,
                'title' => 'partner_delete',
            ],
            [
                'id' => 37,
                'title' => 'partner_access',
            ],
            [
                'id' => 38,
                'title' => 'subscribe_create',
            ],
            [
                'id' => 39,
                'title' => 'subscribe_edit',
            ],
            [
                'id' => 40,
                'title' => 'subscribe_show',
            ],
            [
                'id' => 41,
                'title' => 'subscribe_delete',
            ],
            [
                'id' => 42,
                'title' => 'subscribe_access',
            ],
            [
                'id' => 43,
                'title' => 'game_create',
            ],
            [
                'id' => 44,
                'title' => 'game_edit',
            ],
            [
                'id' => 45,
                'title' => 'game_show',
            ],
            [
                'id' => 46,
                'title' => 'game_delete',
            ],
            [
                'id' => 47,
                'title' => 'game_access',
            ],
            [
                'id' => 48,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
