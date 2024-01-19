<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialTeamsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('social_teams')) {
            Schema::create('social_teams', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->integer('team_id')->unsigned();
                $blueprint->string('url');
                $blueprint->string('social');
                $blueprint->string('social_icon')->nullable();
                $blueprint->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('social_teams');
    }
}
