<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoithanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoithan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manhanvien');
            $table->string('tenthannhan');
            $table->string('quanhe');
            $table->string('diachi');
            $table->string('sdt');
            $table->string('gioitinh');
            $table->string('nghenghiep');
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
        Schema::dropIfExists('nguoithan');
    }
}
