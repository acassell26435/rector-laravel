<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $table) {
                $table->increments('id');
                $table->string('icon');
                $table->string('name');
                $table->text('description');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
