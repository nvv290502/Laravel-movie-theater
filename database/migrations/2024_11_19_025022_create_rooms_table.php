<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('room_id');
            $table->string('room_name', 100)->nullable();
            $table->string('location', 255)->nullable();
            $table->enum('room_type', ['2D','3D','IMAX']);
            $table->tinyInteger('number_seat_column');
            $table->tinyInteger('number_seat_row');
            $table->boolean('is_enabled')->default(true);
            $table->unsignedBigInteger('cinema_id');
            $table->foreign('cinema_id')->references('cinema_id')->on('cinemas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
