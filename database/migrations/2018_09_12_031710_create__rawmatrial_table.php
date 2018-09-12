<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawmatrialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rawmatrial', function (Blueprint $table) {
          $table->integer('matrial_number'); /* รหัสโปรดัหส์ */
          $table->string('Rawmatrial_name'); /* ชื่อวัตถุดิบ */
          $table->string('brand'); /* แบรนสินค้า */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rawmatrial');
    }
}
