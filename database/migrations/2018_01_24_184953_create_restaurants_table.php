<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->integer('merchant_id');
            $table->integer('group_menu_id');
            $table->string('name');
            $table->longText('description');
            $table->string('city');
            $table->string('district');
            $table->string('street');
            $table->string('contact');
            $table->string('image');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->double('rating')->nullable();
            $table->integer('is_active');
            $table->integer('priority')->nullable();
            $table->time('open');
            $table->time('close');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
