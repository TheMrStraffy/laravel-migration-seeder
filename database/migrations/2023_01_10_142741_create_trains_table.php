<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30)->nullable();
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->string('departure_time', 5)->nullable();
            $table->string('arrival_time', 5)->nullable();
            $table->string('train_code', 6);
            $table->tinyInteger('coaches_number')->unsigned();
            $table->tinyInteger('is_in_time')->default(1)->unsigned();
            $table->tinyInteger('is_cancelled')->default(0)->unsigned();
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
        Schema::dropIfExists('trains');
    }
};
