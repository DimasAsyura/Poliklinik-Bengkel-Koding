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
        Schema::create('poli', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('nama_poli', 25);
            $table->text('keterangan')->nullable();
=======
            $table ->string('nama_poli',25);
            $table->text('deskripsi');
>>>>>>> af53feb16f60b86bbd9a2118482627b5b6047178
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poli');
    }
};
