<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTasksTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('team_tasks')) {
            Schema::create('team_tasks', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('team_id');
                $table->integer('user_id');
                $table->text('task');
                $table->integer('status_id');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('team_tasks');
    }
}
