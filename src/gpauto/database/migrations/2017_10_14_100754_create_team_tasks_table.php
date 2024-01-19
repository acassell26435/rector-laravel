<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTasksTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('team_tasks')) {
            Schema::create('team_tasks', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->integer('team_id');
                $blueprint->integer('user_id');
                $blueprint->text('task');
                $blueprint->integer('status_id');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('team_tasks');
    }
}
