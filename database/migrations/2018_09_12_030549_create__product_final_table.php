<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductFinal', function (Blueprint $table) {
            $table->integer('matrial_number'); /* รหัสโปรดัหส์ */
            $table->string('Product_name'); /* ชื่อโปรดักส์ */
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
        Schema::dropIfExists('ProductFinal');
    }
}
