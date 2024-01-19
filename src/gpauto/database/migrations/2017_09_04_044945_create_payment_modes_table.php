<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentModesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('payment_modes')) {
            Schema::create('payment_modes', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('mode');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('payment_modes');
    }
}
