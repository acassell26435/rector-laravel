<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTypesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('vehicle_types')) {
            Schema::create('vehicle_types', function (Blueprint $table) {
                $table->increments('id');
                $table->string('icon');
                $table->string('type');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_types');
    }
}
