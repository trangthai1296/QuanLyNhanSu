<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangchamcongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangchamcong', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ngay');
            $table->integer('manhanvien');
            $table->time('checkin');
            $table->time('checkout');
            $table->integer('tinhtrang');
            $table->softDeletes();
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
        Schema::dropIfExists('bangchamcong');
    }
}
