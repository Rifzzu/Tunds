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
        Schema::create('cafe', function (Blueprint $table) {
            $table->id('idCafe');
            $table->string('namaCafe');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('jamBuka');
            $table->string('rangeHarga');
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe');
    }
};
