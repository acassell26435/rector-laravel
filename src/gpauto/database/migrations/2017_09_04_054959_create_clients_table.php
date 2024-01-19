<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('clients')) {
            Schema::create('clients', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('image');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
