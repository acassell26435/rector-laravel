<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLoginsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('social_logins')) {
            Schema::create('social_logins', function (Blueprint $blueprint) {
                $blueprint->bigIncrements('id');
                $blueprint->boolean('fb_login')->default(0);
                $blueprint->boolean('google_login')->default(0);
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('social_login');
    }
}
