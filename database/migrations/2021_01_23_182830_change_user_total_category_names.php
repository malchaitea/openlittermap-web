<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserTotalCategoryNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('total_softDrinks', 'total_softdrinks');
            $table->unsignedBigInteger('total_dumping')->nullable();
            $table->unsignedBigInteger('total_industrial')->nullable();
            $table->unsignedBigInteger('total_coastal')->nullable();
            //$table->dropColumn('total_drugs');
            $table->dropColumn('total_needles');
            $table->dropColumn('total_cigaretteButts');
            $table->dropColumn('total_plasticBottles');
            $table->dropColumn('total_pathways');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
