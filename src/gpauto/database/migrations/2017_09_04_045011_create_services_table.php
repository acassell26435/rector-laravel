<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('icon');
                $blueprint->string('name');
                $blueprint->text('description');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
