<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopdongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopdong', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manhanvien');
            $table->decimal('luongcoban');
            $table->decimal('luongtangca');
            $table->decimal('phucap');
            $table->decimal('bhxh');
            $table->date('ngaybatdau');
            $table->date('ngayketthuc');
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
        Schema::dropIfExists('hopdong');
    }
}
