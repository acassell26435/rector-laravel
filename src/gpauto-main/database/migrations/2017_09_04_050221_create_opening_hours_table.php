<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpeningHoursTable extends Migration
{
    public function up()
    {
        Schema::create('opening_hours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day');
            $table->string('opening_time');
            $table->string('closing_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opening_hours');
    }
}
