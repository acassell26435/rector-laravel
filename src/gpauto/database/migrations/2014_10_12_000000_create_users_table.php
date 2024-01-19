<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('photo')->unique()->nullable();
                $blueprint->string('name');
                $blueprint->string('email')->unique();
                $blueprint->string('password');
                $blueprint->char('sex')->nullable();
                $blueprint->date('dob')->nullable();
                $blueprint->string('mobile')->unique();
                $blueprint->string('phone')->nullable();
                $blueprint->text('address')->nullable();
                $blueprint->char('role')->nullable();
                $blueprint->rememberToken();
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
