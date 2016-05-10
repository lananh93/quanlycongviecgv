<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongviecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congviec', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenCV');
            $table->string('Loai');
            $table->integer('Thoigian');
            $table->integer('SoluongSV');
            $table->string('Trangthai');
            $table->timestamps('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('congviec');
    }
}
