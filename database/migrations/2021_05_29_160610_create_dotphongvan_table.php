<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotphongvanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotphongvan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('madottuyendung');
            $table->string('ten');
            $table->integer('soluong');
            $table->string('diadiem');
            $table->date('ngaybatdau');
            $table->date('ngayketthuc');
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
        Schema::dropIfExists('dotphongvan');
    }
}
