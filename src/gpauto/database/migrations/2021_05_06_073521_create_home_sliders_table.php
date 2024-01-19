<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSlidersTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('home_sliders')) {
            Schema::create('home_sliders', function (Blueprint $blueprint) {
                $blueprint->bigIncrements('id');
                $blueprint->text('heading');
                $blueprint->text('sub_heading')->nullable();
                $blueprint->longtext('detail')->nullable();
                $blueprint->boolean('button1')->default(0);
                $blueprint->text('button1_text')->nullable();
                $blueprint->text('button1_link')->nullable();
                $blueprint->boolean('button2')->default(0);
                $blueprint->text('button2_text')->nullable();
                $blueprint->text('button2_link')->nullable();
                $blueprint->string('image');
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('home_sliders');
    }
}
