<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleModalsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('vehicle_modals')) {
            Schema::create('vehicle_modals', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('vehicle_modal');
                $blueprint->integer('vehicle_company_id')->unsigned();
                $blueprint->foreign('vehicle_company_id')->references('id')->on('vehicle_companies')->onDelete('cascade');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_modals');
    }
}
