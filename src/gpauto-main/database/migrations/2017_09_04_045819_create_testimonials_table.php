<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('testimonials')) {
            Schema::create('testimonials', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('image')->unique();
                $table->string('post');
                $table->text('detail');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
