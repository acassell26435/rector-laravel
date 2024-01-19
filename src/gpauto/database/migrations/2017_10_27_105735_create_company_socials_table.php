<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySocialsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('company_socials')) {
            Schema::create('company_socials', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('link');
                $blueprint->string('social_site');
                $blueprint->string('social_icon')->nullable();
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('company_socials');
    }
}
