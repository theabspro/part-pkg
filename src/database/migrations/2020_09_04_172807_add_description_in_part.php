<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionInPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('parts', 'description')){
            Schema::table('parts', function (Blueprint $table) {
                $table->string('description')->nullable()->comment('Used in vims parts request')->after('display_order');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('parts', 'description')){
            Schema::table('parts', function (Blueprint $table) {
                $table->dropColumn('description');
            });
        }
    }
}
