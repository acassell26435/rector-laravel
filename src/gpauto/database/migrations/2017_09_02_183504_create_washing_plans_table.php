<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashingPlansTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('washing_plans')) {
            Schema::create('washing_plans', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('washing_plans');
    }
}
