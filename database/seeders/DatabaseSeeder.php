<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Admin
        User::firstOrCreate(
            ['email' => 'admin@amikom.ac.id'],
            [
                'name'     => 'Admin Amikom',
                'password' => bcrypt('password'),
                'role'     => 'admin',
            ]
        );

        // ✅ Kategori
        $category = Category::firstOrCreate(
            ['slug' => 'seminar-it'],
            ['name' => 'Seminar IT']
        );

        $category2 = Category::firstOrCreate(
            ['slug' => 'entertaiment'],
            ['name' => 'Entertaiment']
        );

        $category3 = Category::firstOrCreate(
            ['slug' => 'creative-tect-ui-ux'],
            ['name' => 'Creative Tech & UI/UX'] // ✅ typo "Tect" diperbaiki
        );

        $category4 = Category::firstOrCreate(
            ['slug' => 'programing-development'],
            ['name' => 'Programming & Development'] // ✅ typo "Programing" diperbaiki
        );

        $category5 = Category::firstOrCreate(
            ['slug' => 'data-analytics'],
            ['name' => 'Data & Analytics']
        );

        // ✅ Events
        Event::firstOrCreate(
            ['title' => 'Jazz Night 2025'],
            [
                'category_id' => $category2->id,
                'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
                'date'        => '2026-05-10 19:00:00',
                'location'    => 'Amikom Baru',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => 'posters/event-1.png',
            ]
        );

        Event::firstOrCreate(
            ['title' => 'Hackaton - Unleash Your Inner Developer'],
            [
                'category_id' => $category->id,
                'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
                'date'        => '2026-05-05 10:00:00',
                'location'    => 'Inkubator Amikom',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => 'posters/event-2.png',
            ]
        );

        Event::firstOrCreate(
            ['title' => 'AI & FUTURE TECH SUMMIT 2026'],
            [
                'category_id' => $category->id,
                'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.',
                'date'        => '2026-05-01 13:00:00',
                'location'    => 'Cinema Unit 6',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => 'posters/event-3.png',
            ]
        );

        Event::firstOrCreate(
            ['title' => 'UI/UX Masterclass'],
            [
                'category_id' => $category3->id,
                'description' => 'Workshop intensif tentang desain antarmuka dan pengalaman pengguna.',
                'date'        => '2026-06-15 09:00:00', // ✅ tanggal dibedakan agar tidak sama semua
                'location'    => 'Lab Komputer AMIKOM',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => 'posters/event-4.png',
            ]
        );

        Event::firstOrCreate(
            ['title' => 'Code Sprint Challenge'],
            [
                'category_id' => $category4->id,
                'description' => 'Kompetisi membangun aplikasi web/mobile dalam waktu terbatas, fokus pada problem solving dan teamwork.',
                'date'        => '2026-06-20 08:00:00', // ✅ tanggal dibedakan
                'location'    => 'Inkubator Amikom',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => 'posters/event-5.png',
            ]
        );

        Event::firstOrCreate(
            ['title' => 'Data Visualization Hackathon'],
            [
                'category_id' => $category5->id,
                'description' => 'Tantangan membuat dashboard interaktif dengan tools seperti Tableau atau Power BI.',
                'date'        => '2026-07-01 10:00:00', // ✅ tanggal dibedakan
                'location'    => 'Cinema Unit 6',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => 'posters/event-6.png',
            ]
        );
    }
}