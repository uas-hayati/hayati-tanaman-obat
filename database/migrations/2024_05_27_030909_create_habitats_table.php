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
        Schema::create('habitats', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_nama', 50);
            $table->unsignedBigInteger('tumbuhan_id');
            $table->unsignedBigInteger('lokasi_id');
            $table->timestamps();

            $table->foreign('tumbuhan_id')-> references('id')->on('tumbuhans')->onDelete('cascade');
            $table->foreign('lokasi_id')-> references('id')->on('lokasis')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitats');
    }
};
