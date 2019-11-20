<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatCommunparttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bat_communpartt', function (Blueprint $table) {

                $table->unsignedBigInteger('batiments_comune_id');
                $table->foreign('batiments_comune_id')->references('id')->on('comun__parts')->onDelete('cascade');

                $table->unsignedBigInteger('batiment_id');
                $table->foreign('batiment_id')->references('id')->on('batiments')->onDelete('cascade');

                $table->primary(['batiments_comune_id', 'batiment_id']);

                Schema::enableForeignKeyConstraints();

                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bat_communpartt');
    }
}
