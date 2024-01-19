<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashingPricesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('washing_prices')) {
            Schema::create('washing_prices', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->integer('washing_plan_id');
                $blueprint->integer('vehicle_type_id');
                $blueprint->string('price');
                $blueprint->string('duration');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('washing_prices');
    }
}
