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
        Schema::create('superheroes', function (Blueprint $table) {
            $table-›id();
            $table -›string('name' ,100);
            $table ->string('real_name',40);
            $table -›foreign_Id( 'Universe_id') -› constrained('universes');
            $table -›foreign_Id( 'Gender_id') -> coknstrained ('genders');
            $table -›string( 'Gender' ,10);
            $table -›string('picture');
            $table-›timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
