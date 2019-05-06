<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Page::insert([
            'title'       => 'Multi Restaurant Order System',
            'name'        => 'OK-FOOD',
            'description' => 'TAKE YOUR FOOD BUSINESS TO THE NEXT LEVEL WITH OK-FOOD',
            'about'       => 'Lorem ipsum dolor sit amet, sea latine oportere consectetuer in, mei audire nominavi in. Cum et tota consetetur, est id quis iudico definiebas. Duo te aeterno inciderint, cu his essent lucilius, altera accusam elaboraret pri ea.',
            'contact'     => '+6287712385474',
            'country'     => 'Indonesia',
            'city'        => 'Madiun',
            'district'    => 'Mojorejo',
            'street'      => 'Jl. H. Agus Salim No 2',
            'created_at'  => \Carbon\Carbon::now(),
        ]);
    }
}
