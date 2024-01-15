<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('c_name');
                $table->string('logo');
                $table->string('mobile');
                $table->string('phone');
                $table->string('address');
                $table->string('email');
                $table->string('website');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
