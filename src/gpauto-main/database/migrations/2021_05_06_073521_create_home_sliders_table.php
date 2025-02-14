<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSlidersTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('home_sliders')) {
            Schema::create('home_sliders', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('heading');
                $table->text('sub_heading')->nullable();
                $table->longtext('detail')->nullable();
                $table->boolean('button1')->default(0);
                $table->text('button1_text')->nullable();
                $table->text('button1_link')->nullable();
                $table->boolean('button2')->default(0);
                $table->text('button2_text')->nullable();
                $table->text('button2_link')->nullable();
                $table->string('image');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('home_sliders');
    }
}
