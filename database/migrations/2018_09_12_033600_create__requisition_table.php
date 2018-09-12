<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Requisition', function (Blueprint $table) {
            $table->increments('id'); /*ลำดับ*/
            $table->integer('Matrial_number'); /*ระหัสโปรดักส์*/
            $table->string('Product_name'); /*ชือโปรดักส์*/
            $table->date('date'); /*วันที่รับของ*/
            $table->string('Bill_number'); /*เลขที่บิล*/
            $table->date('date1'); /*วันที่คืนของ*/
            $table->integer('Amount'); /*จำนวนที่เบิก*/
            $table->string('Name_Take'); /*ชื่อผู้คืน*/
            $table->string('empid'); /*รหัสพนักงาน*/
            $table->string('Name_returnproduct'); /*ชื่อผู้คืน*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Requisition');
    }
}
