<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('facts')) {
            Schema::create('facts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('icon');
                $table->integer('number');
                $table->text('detail');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('facts');
    }
}
