<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Customer::insert([
            'name'       => 'John Doe',
            'email'      => 'johndoe@example.com',
            'password'   => bcrypt('customer'),
            'phone'      => '0877123456780',
            'fcm_id'     => '',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Customer::insert([
            'name'       => 'Jane Doe',
            'email'      => 'janedoe@example.com',
            'password'   => bcrypt('customer'),
            'phone'      => '0857123456780',
            'fcm_id'     => '',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Customer::insert([
            'name'       => 'John Roe',
            'email'      => 'johnroe@example.com',
            'password'   => bcrypt('customer'),
            'phone'      => '0857123456780',
            'fcm_id'     => '',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        \App\Customer::insert([
            'name'       => 'Richard Roe',
            'email'      => 'richardroe@example.com',
            'password'   => bcrypt('customer'),
            'phone'      => '0857123456780',
            'fcm_id'     => '',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
