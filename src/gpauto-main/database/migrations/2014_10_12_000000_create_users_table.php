<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('photo')->unique()->nullable();
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');
                $table->char('sex')->nullable();
                $table->date('dob')->nullable();
                $table->string('mobile')->unique();
                $table->string('phone')->nullable();
                $table->text('address')->nullable();
                $table->char('role')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
