@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')
<form action="/inventory/store" method="POST">
  @csrf
  <div class="mb-3">
    <label>Kode Barang</label>
    <input type="text" name="kode_barang" class="form-control">
  </div>
  <div class="mb-3">
    <label>Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control">
  </div>
  <div class="mb-3">
    <label>Jumlah</label>
    <input type="number" name="jumlah_barang" class="form-control">
  </div>
  <div class="mb-3">
    <label>Satuan</label>
    <select name="satuan_barang" class="form-select">
      <option value="pcs">pcs</option>
      <option value="kg">kg</option>
      <option value="liter">liter</option>
      <option value="meter">meter</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Harga Beli</label>
    <input type="number" name="harga_beli" step="0.01" class="form-control">
  </div>
  <div class="mb-3">
    <label>Status Barang</label><br>
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" name="status_barang" value="1" checked>
      <label class="form-check-label">Available</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" name="status_barang" value="0">
      <label class="form-check-label">Not Available</label>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="/" class="btn btn-secondary">Kembali</a>
</form>
@endsection