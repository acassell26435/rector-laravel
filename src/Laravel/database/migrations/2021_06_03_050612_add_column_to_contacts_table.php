<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToContactsTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable('contacts')) {
            Schema::table('contacts', function (Blueprint $blueprint) {
                if (! Schema::hasColumn('contacts', 'inspect')) {
                    $blueprint->boolean('inspect')->default(1);
                }
                if (! Schema::hasColumn('contacts', 'rightclick')) {
                    $blueprint->boolean('rightclick')->default(1);
                }
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('contacts')) {
            Schema::table('contacts', function (Blueprint $blueprint) {
                $blueprint->dropColumn('inspect');
                $blueprint->dropColumn('rightclick');
            });
        }
    }
}
