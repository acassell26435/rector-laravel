<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('galleries')) {
            Schema::create('galleries', function (Blueprint $table) {
                $table->increments('id');
                $table->string('gallery_img');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
