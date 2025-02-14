<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleCompaniesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('vehicle_companies')) {
            Schema::create('vehicle_companies', function (Blueprint $table) {
                $table->increments('id');
                $table->string('vehicle_company');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_companies');
    }
}
