<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResponseFieldToTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tickets')) {
            //
            if (!Schema::hasColumn('tickets', 'response')) {
                //
                Schema::table('tickets', function (Blueprint $table) {
                    //
                    $table->longText('response')->nullable();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('tickets', 'response')) {
            //
            Schema::table('tickets', function (Blueprint $table) {
                //
                $table->dropColumn(['response']);
            });
        }
    }
}
