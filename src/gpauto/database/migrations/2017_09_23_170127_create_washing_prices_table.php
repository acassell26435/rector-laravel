<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashingPricesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('washing_prices')) {
            Schema::create('washing_prices', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('washing_plan_id');
                $table->integer('vehicle_type_id');
                $table->string('price');
                $table->string('duration');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('washing_prices');
    }
}
