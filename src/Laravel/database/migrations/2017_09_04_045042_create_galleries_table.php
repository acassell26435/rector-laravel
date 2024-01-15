<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('galleries')) {
            Schema::create('galleries', function (Blueprint $blueprint) {
                $blueprint->increments('id');
                $blueprint->string('gallery_img');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
