<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'app_name' => 'Admin Laravel',
            'copyright' => 'Admin Laravel || 2026',
            'login_title' => 'Admin Laravel',
            'description' => 'Sistem Root Admin berbasis laravel untuk manajemen data, kontrol pengguna, dan konfigurasi aplikasi secara terpusat, aman, dan efisien.',
            'keywords' => 'dashboard admin, root admin laravel, sistem manajemen data, aplikasi backend, laravel admin panel, control panel website, manajemen user, app admin laravel',
        ]);
    }
}
