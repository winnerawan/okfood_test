<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmpOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_order_details', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('order_id');
//            $table->integer('menu_id');
//            $table->integer('qty');
//            $table->string('order_notes');
//            $table->decimal('unit_price');
//            $table->decimal('sub_total');
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
        Schema::dropIfExists('tmp_order_details');
    }
}
