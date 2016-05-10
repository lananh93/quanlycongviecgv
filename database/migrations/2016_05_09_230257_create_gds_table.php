<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gds', function (Blueprint $table) {
            $table->increments('MaGD');
            $table->integer('MaMH');
            $table->integer('users_id');
            $table->string('TenGD');
            $table->date('TgBD');
            $table->date('TgKT');
            $table->string('Trangthai');
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
        Schema::drop('gds');
    }
}
