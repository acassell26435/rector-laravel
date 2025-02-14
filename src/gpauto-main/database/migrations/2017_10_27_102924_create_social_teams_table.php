<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialTeamsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('social_teams')) {
            Schema::create('social_teams', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('team_id')->unsigned();
                $table->string('url');
                $table->string('social');
                $table->string('social_icon')->nullable();
                $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('social_teams');
    }
}
