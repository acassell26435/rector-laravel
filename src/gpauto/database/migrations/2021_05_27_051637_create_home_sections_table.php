<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSectionsTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('home_sections')) {
            Schema::create('home_sections', function (Blueprint $blueprint) {
                $blueprint->bigIncrements('id');
                $blueprint->boolean('slider_section')->default(0);
                $blueprint->boolean('about_section')->default(0);
                $blueprint->boolean('service_section')->default(0);
                $blueprint->boolean('gallery_section')->default(0);
                $blueprint->boolean('facts_section')->default(0);
                $blueprint->boolean('team_section')->default(0);
                $blueprint->boolean('plan_section')->default(0);
                $blueprint->boolean('appointment_section')->default(0);
                $blueprint->boolean('testinomial_section')->default(0);
                $blueprint->boolean('blog_section')->default(0);
                $blueprint->boolean('client_section')->default(0);
                $blueprint->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('home_sections');
    }
}
