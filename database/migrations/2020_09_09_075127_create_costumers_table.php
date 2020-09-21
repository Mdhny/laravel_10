<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alamat');
            $table->string('phone');
            $table->string('email');
            // $table->integer('consumer_id')->unsigned();
            $table->integer('packet_id')->unsigned();
            $table->timestamps();
            // $table->softDeletes();
        });
        Schema::table('costumers', function (Blueprint $table){
            // $table->foreign('consumer_id')->references('id')->on('consumers');
            $table->foreign('packet_id')->references('id')->on('packets');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costumers');
    }
}
