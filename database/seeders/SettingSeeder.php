<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'email' => 'support@bluhub.rw',
            'phone_number' => '+250 788 683 036',
            'address' => 'KN 12 St, Kigali Rwanda',
            'facebook' => null,
            'twitter' => 'https://x.com/bluhub_rw',
            'instagram' => 'https://instagram.com/bluhub_rw',
            'tiktok' => null,
            'youtube' => 'https://youtube.com/c/bluhub_rw',
        ]);
    }
}
