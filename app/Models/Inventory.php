<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'tb_inventory';
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'kode_barang', 'nama_barang', 'jumlah_barang', 'satuan_barang', 'harga_beli', 'status_barang'
    ];
    public $timestamps = false;
}