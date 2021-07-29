<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten');
            $table->date('ngaysinh');
            $table->string('diachi');
            $table->string('gioitinh');
            $table->string('sdt');
            $table->string('cmnd');
            $table->string('tinhtrang');
            $table->float('hesoluong');
            $table->integer('maphongban');
            $table->integer('machucvu');
            $table->integer('madotphongvan');
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
        Schema::dropIfExists('nhanvien');
    }
}
