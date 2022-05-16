<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetquotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setquotes', function (Blueprint $table) {
            $table->id();
            $table->string('weight_rate');
            $table->string('distance_rate');
            $table->string('road_rate');
            $table->string('air_rate');
            $table->string('ocean_rate');
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
        Schema::dropIfExists('setquotes');
    }
}
