<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder {
    public function run(): void {
        DB::table('tb_inventory')->insert([
            ['kode_barang' => 'BRG001', 'nama_barang' => 'Pulpen', 'jumlah_barang' => 100, 'satuan_barang' => 'pcs', 'harga_beli' => 1500.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG002', 'nama_barang' => 'Pensil', 'jumlah_barang' => 80, 'satuan_barang' => 'pcs', 'harga_beli' => 1000.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG003', 'nama_barang' => 'Buku Tulis', 'jumlah_barang' => 50, 'satuan_barang' => 'pcs', 'harga_beli' => 3000.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG004', 'nama_barang' => 'Spidol', 'jumlah_barang' => 30, 'satuan_barang' => 'pcs', 'harga_beli' => 2500.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG005', 'nama_barang' => 'Penghapus', 'jumlah_barang' => 60, 'satuan_barang' => 'pcs', 'harga_beli' => 800.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG006', 'nama_barang' => 'Rautan', 'jumlah_barang' => 40, 'satuan_barang' => 'pcs', 'harga_beli' => 1200.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG007', 'nama_barang' => 'Kertas A4', 'jumlah_barang' => 200, 'satuan_barang' => 'pcs', 'harga_beli' => 100.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG008', 'nama_barang' => 'Amplop', 'jumlah_barang' => 150, 'satuan_barang' => 'pcs', 'harga_beli' => 500.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG009', 'nama_barang' => 'Map', 'jumlah_barang' => 90, 'satuan_barang' => 'pcs', 'harga_beli' => 1700.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG010', 'nama_barang' => 'Stapler', 'jumlah_barang' => 20, 'satuan_barang' => 'pcs', 'harga_beli' => 7000.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG011', 'nama_barang' => 'Cutter', 'jumlah_barang' => 25, 'satuan_barang' => 'pcs', 'harga_beli' => 4000.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG012', 'nama_barang' => 'Lakban', 'jumlah_barang' => 35, 'satuan_barang' => 'pcs', 'harga_beli' => 3000.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG013', 'nama_barang' => 'Pita Printer', 'jumlah_barang' => 10, 'satuan_barang' => 'pcs', 'harga_beli' => 15000.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG014', 'nama_barang' => 'Tinta', 'jumlah_barang' => 15, 'satuan_barang' => 'liter', 'harga_beli' => 50000.00, 'status_barang' => 1],
            ['kode_barang' => 'BRG015', 'nama_barang' => 'Flashdisk', 'jumlah_barang' => 12, 'satuan_barang' => 'pcs', 'harga_beli' => 75000.00, 'status_barang' => 1],
        ]);
    }
}