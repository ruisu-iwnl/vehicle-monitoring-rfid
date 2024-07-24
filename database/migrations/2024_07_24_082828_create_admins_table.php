<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('employeenumber')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('emailaddress')->unique();
            $table->string('contactnumber');
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

