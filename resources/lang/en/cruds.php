<?php

declare(strict_types=1);

return [
    'userManagement' => [
        'title' => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title' => 'Permissions',
        'title_singular' => 'Permission',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title' => 'Roles',
        'title_singular' => 'Role',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'permissions' => 'Permissions',
            'permissions_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'user' => [
        'title' => 'Users',
        'title_singular' => 'User',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'email' => 'Email',
            'email_helper' => ' ',
            'email_verified_at' => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password' => 'Password',
            'password_helper' => ' ',
            'roles' => 'Roles',
            'roles_helper' => ' ',
            'remember_token' => 'Remember Token',
            'remember_token_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title' => 'Setting',
        'title_singular' => 'Setting',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'email' => 'Email',
            'email_helper' => ' ',
            'phone_number' => 'Phone Number',
            'phone_number_helper' => ' ',
            'facebook' => 'Facebook',
            'facebook_helper' => ' ',
            'twitter' => 'Twitter',
            'twitter_helper' => ' ',
            'instagram' => 'Instagram',
            'instagram_helper' => ' ',
            'tiktok' => 'Tiktok',
            'tiktok_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
            'youtube' => 'YouTube',
            'youtube_helper' => ' ',
            'address' => 'Address',
            'address_helper' => ' ',
        ],
    ],
    'team' => [
        'title' => 'Team',
        'title_singular' => 'Team',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'logo' => 'Logo',
            'logo_helper' => ' ',
            'is_available' => 'Is Available',
            'is_available_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'blog' => [
        'title' => 'Blog',
        'title_singular' => 'Blog',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'slug' => 'Slug',
            'slug_helper' => ' ',
            'featured_image' => 'Featured Image',
            'featured_image_helper' => ' ',
            'body' => 'Body',
            'body_helper' => ' ',
            'status' => 'Status',
            'status_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'event' => [
        'title' => 'Event',
        'title_singular' => 'Event',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'event_date' => 'Event Date',
            'event_date_helper' => ' ',
            'event_time' => 'Event Time',
            'event_time_helper' => ' ',
            'location' => 'Location',
            'location_helper' => ' ',
            'featured_image' => 'Featured Image',
            'featured_image_helper' => ' ',
            'ticket_url' => 'Ticket Url',
            'ticket_url_helper' => ' ',
            'status' => 'Status',
            'status_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'partner' => [
        'title' => 'Partner',
        'title_singular' => 'Partner',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'logo' => 'Logo',
            'logo_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'subscribe' => [
        'title' => 'Subscribe',
        'title_singular' => 'Subscribe',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'email' => 'Email',
            'email_helper' => ' ',
            'is_subscribed' => 'Is Subscribed',
            'is_subscribed_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'game' => [
        'title' => 'Game',
        'title_singular' => 'Game',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'team_one' => 'Team One',
            'team_one_helper' => ' ',
            'team_two' => 'Team Two',
            'team_two_helper' => ' ',
            'avenue' => 'Avenue',
            'avenue_helper' => ' ',
            'game_date' => 'Game Date',
            'game_date_helper' => ' ',
            'game_time' => 'Game Time',
            'game_time_helper' => ' ',
            'ticket_url' => 'Ticket Url',
            'ticket_url_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],

];
