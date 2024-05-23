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
        Schema::create('tumbuhans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->string('nama', 50);
            $table->string('nama_latin');
            $table->string('famili');
            $table->string('kegunaan', 200);
            $table->longText('deskripsi');
            $table->string('gambar');
            $table->timestamps();

            $table->foreign('admin_id')-> references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tumbuhans');
    }
};
