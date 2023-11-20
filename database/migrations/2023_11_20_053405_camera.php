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
        Schema::create('cameras', function (Blueprint $table) {
            $table->id();
            $table->integer('no_seri')->unique();
            $table->string('merek');
            $table->date('tanggal_diterbitkan');
            $table->string('model');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->text('penyimpanan');
            $table->text('baterai');
            $table->text('prosesor');
            $table->text('ukuran_layar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
