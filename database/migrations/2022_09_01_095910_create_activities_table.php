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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->boolean('food');
            $table->string('image');
            $table->double('price');
            $table->datetime('startTime');
            $table->datetime('endTime');
            $table->string('description');
            $table->string('needs');
            $table->integer('minParticipants');
            $table->integer('maxParticipants');
            $table->string('signedUpUsers');
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
        Schema::dropIfExists('activities');
    }
};
