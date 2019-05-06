<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Type::insert([
            'name'       => 'Seafood',
            'image'      => 'seafood.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Martabak',
            'image'      => 'martabak.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Aneka Nasi',
            'image'      => 'anekanasi.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Aneka Ayam & Bebek',
            'image'      => 'ayambebek.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Snack & Jajanan',
            'image'      => 'snackjajanan.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Pizza & Pasta',
            'image'      => 'pizzapasta.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Bakmie',
            'image'      => 'bakmie.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Soto, Bakso, Sop',
            'image'      => 'sotobaksosop.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Fastfood',
            'image'      => 'fastfood.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Minuman',
            'image'      => 'minuman.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Sate',
            'image'      => 'sate.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Japanese',
            'image'      => 'japanese.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Sweets & Deserts',
            'image'      => 'sweetsdesserts.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Western',
            'image'      => 'western.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Roti',
            'image'      => 'roti.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Chinese',
            'image'      => 'chinese.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Korean',
            'image'      => 'korean.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Indian Food',
            'image'      => 'indianfood.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Middle Eastern',
            'image'      => 'middleeastern.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Coffee Shop',
            'image'      => 'coffeeshop.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Type::insert([
            'name'       => 'Thai',
            'image'      => 'thai.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
