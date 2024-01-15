<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentUsersTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('appointment_users')) {
            Schema::create('appointment_users', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->integer('user_id')->unsigned();
                $blueprint->integer('appointment_id')->unsigned();
                $blueprint->string('discount')->nullable();
                $blueprint->string('advance')->nullable();
                $blueprint->integer('payment_method_id')->nullable();
                $blueprint->string('remark')->nullable();
                $blueprint->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $blueprint->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('appointment_users');
    }
}
