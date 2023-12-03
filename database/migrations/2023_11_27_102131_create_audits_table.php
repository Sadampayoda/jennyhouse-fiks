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
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
           
            $table->enum('status', ['nambah barang','update barang','hapus_barang' ,'beli barang']); // Menggunakan ENUM
            $table->string('nama_barang');
            $table->decimal('harga_barang', 10, 2);
            $table->integer('quantity');
            $table->unsignedBigInteger('user_id');
            
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit');
    }
};
