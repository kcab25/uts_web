<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tb_inventory', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('kode_barang', 20);
            $table->string('nama_barang', 50);
            $table->integer('jumlah_barang');
            $table->string('satuan_barang', 20);
            $table->double('harga_beli', 20, 2);
            $table->boolean('status_barang')->default(1);
        });
    }

    public function down(): void {
        Schema::dropIfExists('tb_inventory');
    }
};