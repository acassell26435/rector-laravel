<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('c_name');
                $blueprint->string('logo');
                $blueprint->string('mobile');
                $blueprint->string('phone');
                $blueprint->string('address');
                $blueprint->string('email');
                $blueprint->string('website');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
