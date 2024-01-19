<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLogoTwoColInContactTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable('contacts')) {
            Schema::table('contacts', function (Blueprint $blueprint) {
                if (! Schema::hasColumn('contacts', 'logo_two')) {
                    $blueprint->string('logo_two')->nullable();
                }
            });
        }
    }

    public function down()
    {
        Schema::table('contacts', function (Blueprint $blueprint) {
            $blueprint->dropColumn('logo_two');
        });
    }
}
