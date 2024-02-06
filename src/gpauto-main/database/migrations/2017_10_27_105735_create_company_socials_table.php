<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySocialsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('company_socials')) {
            Schema::create('company_socials', function (Blueprint $table) {
                $table->increments('id');
                $table->string('link');
                $table->string('social_site');
                $table->string('social_icon')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('company_socials');
    }
}
