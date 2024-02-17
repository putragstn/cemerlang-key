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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('telepon');
            $table->string('email');
            $table->string('no_whatsapp');
            $table->string('link_whatsapp');
            $table->string('nama_facebook');
            $table->string('link_facebook');
            $table->string('nama_instagram');
            $table->string('link_instagram');
            $table->string('lokasi');
            $table->string('link_lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
