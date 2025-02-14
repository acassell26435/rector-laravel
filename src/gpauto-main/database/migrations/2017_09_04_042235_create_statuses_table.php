<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('statuses')) {
            Schema::create('statuses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('status');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
