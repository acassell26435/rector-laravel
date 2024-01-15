<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('title');
                $blueprint->string('img')->nullable();
                $blueprint->integer('user_id');
                $blueprint->date('date');
                $blueprint->text('dtl');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
