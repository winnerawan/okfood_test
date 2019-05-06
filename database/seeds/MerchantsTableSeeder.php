<?php

use Illuminate\Database\Seeder;

class MerchantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Merchant::insert([
            'name'       => 'Owner KFC',
            'email'      => 'kfc@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner CFC',
            'email'      => 'cfc@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Martabak Hawai',
            'email'      => 'martabak_hawai@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Terang Bulan Holland',
            'email'      => 'martabak_holland@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Terang Bulan Kakao',
            'email'      => 'martabak_kakao@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Indoroland',
            'email'      => 'indoroland@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Ten Sushi',
            'email'      => 'ten_sushi@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Sasuke Rame',
            'email'      => 'sasuke@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Nobunaga Sushi',
            'email'      => 'nobunaga_sushi@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Kimochi Cafe',
            'email'      => 'kimochi_cafe@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Gloria Chinese Food',
            'email'      => 'gloria_chinese@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Kia-Kia Resti',
            'email'      => 'kia_resto@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Hoki-Hoki',
            'email'      => 'hoki_hoki@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner Oblend',
            'email'      => 'oblend@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner John Coffee',
            'email'      => 'john_coffee@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Merchant::insert([
            'name'       => 'Owner 3 Coffee',
            'email'      => 'three_coffee@example.com',
            'password'   => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
