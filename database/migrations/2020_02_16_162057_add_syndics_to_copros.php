<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSyndicsToCopros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('copros', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('syndic_id')->nullable();
            $table->foreign('syndic_id')->references('id')->on('syndics')->onDelete('set null');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('copros', function (Blueprint $table) {
            //
        });
    }
}
