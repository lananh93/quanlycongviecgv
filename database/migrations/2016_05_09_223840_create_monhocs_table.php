<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonhocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monhocs', function (Blueprint $table) {
            $table->string('MaMH');
            $table->string('MaLop');
            $table->string('TenMH');
            $table->string('HocKy');
            $table->string('HeDT');
            $table->string('Loaigio');
            $table->integer('Sogio');
            $table->integer('SoTC');
            $table->integer('SoSV');
            $table->float('HesoLop');
            $table->float('HesoDT');
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
        Schema::drop('monhocs');
    }
}
