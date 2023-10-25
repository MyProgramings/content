<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contents')->insert([
            'title' => 'الترم الأول',
            'link' => 'http://127.0.0.1:8000',
            'user_id' => 2,
            'description' => 'معلومات بيانات الترم الأول',
            'created_at' => '2022-05-05 05:08:00',
            'updated_at' => '2022-05-05 05:08:00',
        ]);
        DB::table('contents')->insert([
            'title' => 'الترم الثاني',
            'link' => 'http://127.0.0.1:8000',
            'user_id' => 2,
            'description' => 'معلومات بيانات الترم الثاني',
            'created_at' => '2022-05-05 05:08:00',
            'updated_at' => '2022-05-05 05:08:00',
        ]);
        DB::table('contents')->insert([
            'title' => 'الترم الثالث',
            'link' => 'http://127.0.0.1:8000',
            'user_id' => 2,
            'description' => 'معلومات بيانات الترم الثالث',
            'created_at' => '2022-05-05 05:08:00',
            'updated_at' => '2022-05-05 05:08:00',
        ]);
        DB::table('contents')->insert([
            'title' => 'الترم الرابع',
            'link' => 'http://127.0.0.1:8000',
            'user_id' => 2,
            'description' => 'معلومات بيانات الترم الرابع',
            'created_at' => '2022-05-05 05:08:00',
            'updated_at' => '2022-05-05 05:08:00',
        ]);
    }
}