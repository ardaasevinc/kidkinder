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
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string('baslik1');
            $table->string('baslik2');
            $table->text('aciklama');
            $table->string('goruntul1')->nullable();
            $table->string('goruntul2')->nullable();
            $table->string('buton_metni');
            $table->date('tarih');
            $table->string('kisa_metin1');
            $table->string('kisa_metin2');
            $table->string('kisa_metin3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutuses');
    }
};
