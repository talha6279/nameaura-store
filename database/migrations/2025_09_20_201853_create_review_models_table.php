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
        Schema::create('review_models', function (Blueprint $table) {
            $table->id('review_id'); 
            $table->string('item_id');
            $table->string('name');
            $table->integer('rating');   //rating from 1 to 5
            $table->longText('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_models');
    }
};
