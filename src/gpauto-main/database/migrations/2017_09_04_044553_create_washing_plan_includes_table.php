<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashingPlanIncludesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('washing_plan_includes')) {
            Schema::create('washing_plan_includes', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('washing_plan_id')->unsigned();
                $table->string('washing_plan_include');
                $table->foreign('washing_plan_id')->references('id')->on('washing_plans')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('washing_plan_includes');
    }
}
