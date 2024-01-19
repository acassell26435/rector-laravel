<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToContactsTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable('contacts')) {
            Schema::table('contacts', function (Blueprint $table) {
                if (! Schema::hasColumn('contacts', 'inspect')) {
                    $table->boolean('inspect')->default(1);
                }
                if (! Schema::hasColumn('contacts', 'rightclick')) {
                    $table->boolean('rightclick')->default(1);
                }
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('contacts')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn('inspect');
                $table->dropColumn('rightclick');
            });
        }
    }
}
