<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacvugdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tacvugds', function (Blueprint $table) {
            $table->increments('MaTV');
            $table->integer('MaGD');
            $table->string('TenTV');
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
        Schema::drop('tacvugds');
    }
}
