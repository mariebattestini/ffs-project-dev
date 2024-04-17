<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('modifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id');
            $table->unsignedBigInteger('moderateur_id');
            $table->timestamps();

            $table->foreign('experience_id')->references('id')->on('experiences');
            $table->foreign('moderateur_id')->references('id')->on('moderateurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modifications');
    }
};
