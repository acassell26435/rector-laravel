<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('teams')) {
            Schema::create('teams', function (Blueprint $table) {
                $table->increments('id');
                $table->string('photo')->unique()->nullable();
                $table->string('name');
                $table->string('email')->unique();
                $table->char('sex');
                $table->string('mobile')->unique();
                $table->string('phone')->nullable();
                $table->date('dob');
                $table->string('post');
                $table->text('address');
                $table->char('status');
                $table->date('join_date');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
