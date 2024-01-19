<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('teams')) {
            Schema::create('teams', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('photo')->unique()->nullable();
                $blueprint->string('name');
                $blueprint->string('email')->unique();
                $blueprint->char('sex');
                $blueprint->string('mobile')->unique();
                $blueprint->string('phone')->nullable();
                $blueprint->date('dob');
                $blueprint->string('post');
                $blueprint->text('address');
                $blueprint->char('status');
                $blueprint->date('join_date');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
