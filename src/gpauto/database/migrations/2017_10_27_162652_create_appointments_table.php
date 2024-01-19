<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('appointments')) {
            Schema::create('appointments', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->integer('user_id')->unsigned();
                $blueprint->integer('vehicle_company_id');
                $blueprint->integer('vehicle_modal_id');
                $blueprint->integer('vehicle_types_id');
                $blueprint->integer('washing_plan_id');
                $blueprint->integer('status_id')->nullable();
                $blueprint->date('appointment_date');
                $blueprint->string('vehicle_no')->nullable();
                $blueprint->string('time_frame')->nullable();
                $blueprint->string('appx_hour')->nullable();
                $blueprint->text('remark')->nullable();
                $blueprint->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
