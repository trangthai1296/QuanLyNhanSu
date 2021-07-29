<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhenthuongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khenthuong', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manhanvien');
            $table->string('lydo');
            $table->string('hinhthuc');
            $table->date('ngaykhenthuong');
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
        Schema::dropIfExists('khenthuong');
    }
}
