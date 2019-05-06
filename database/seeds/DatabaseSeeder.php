<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(MerchantsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(TaxTableSeeder::class);
    }
}
