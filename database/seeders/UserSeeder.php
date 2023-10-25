<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'The Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
            'code' => '11111111',
            'role' => '1',
            'location' => 'المنصورة',
            'created_at' => '2022-05-05 05:08:00',
            'updated_at' => '2022-05-05 05:08:00',
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'علي احمد',
            'email' => 'user@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
            'code' => '99999992',
            'role' => '0',
            'location' => 'القاهرة',
            'created_at' => '2022-05-05 05:08:00',
            'updated_at' => '2022-05-05 05:08:00',
        ]);
    }
}
