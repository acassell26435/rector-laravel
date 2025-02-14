<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('appointments')) {
            Schema::create('appointments', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('vehicle_company_id');
                $table->integer('vehicle_modal_id');
                $table->integer('vehicle_types_id');
                $table->integer('washing_plan_id');
                $table->integer('status_id')->nullable();
                $table->date('appointment_date');
                $table->string('vehicle_no')->nullable();
                $table->string('time_frame')->nullable();
                $table->string('appx_hour')->nullable();
                $table->text('remark')->nullable();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
