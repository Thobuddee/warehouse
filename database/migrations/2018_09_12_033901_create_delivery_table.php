<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->increments('id'); /*ลำดับ*/
            $table->integer('Matrial_Number'); /*รหัสโปรดักส์*/
            $table->string('Product_Name'); /*ชื่อโปรดักส์*/
            $table->date('date'); /*วันที่ส่งของ*/
            $table->integer('Amount'); /*จำนวนที่ส่งของ*/
            $table->string('empid'); /*รหัสพนักงาน*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery');
    }
}
