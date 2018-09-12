<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id'); /* รหัสพนักงาน */
            $table->string('user_name'); /* ชื่อ */
            $table->string('user_lname'); /* นามสกุล */
            $table->string('username'); /* ชื่อเข้าสู่ระบบ */
            $table->integer('password'); /* รหัสผ่านเข้าสู่ระบบ */
            $table->string('dept'); /* แผนก */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
