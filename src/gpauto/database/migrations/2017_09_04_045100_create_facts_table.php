<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('facts')) {
            Schema::create('facts', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('icon');
                $blueprint->integer('number');
                $blueprint->text('detail');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('facts');
    }
}
