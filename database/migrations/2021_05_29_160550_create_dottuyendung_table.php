<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDottuyendungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dottuyendung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->integer('maphongban');
            $table->integer('machucvu');
            $table->integer('soluong');
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
        Schema::dropIfExists('dottuyendung');
    }
}
