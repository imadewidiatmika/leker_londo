<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 191)->nullable()->unique();
            $table->string('nowa', 20)->nullable()->unique();
            $table->string('province_id', 10)->index(); // ID Provinsi dari API
            $table->string('province_name', 100); // Nama Provinsi
            $table->string('city_id', 10)->index(); // ID Kota dari API
            $table->string('city_name', 100); // Nama Kota
            $table->timestamps();
        });
    }
    

    /**
     * Rollback migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
