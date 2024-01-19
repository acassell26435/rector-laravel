<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpeningHoursTable extends Migration
{
    public function up()
    {
        Schema::create('opening_hours', function (Blueprint $blueprint) {
            $blueprint->increments('id');
            $blueprint->string('day');
            $blueprint->string('opening_time');
            $blueprint->string('closing_time');
            $blueprint->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opening_hours');
    }
}
