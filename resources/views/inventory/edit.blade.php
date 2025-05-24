@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')
<form action="/inventory/update/{{ $item->id_barang }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Kode Barang</label>
    <input type="text" name="kode_barang" class="form-control" value="{{ $item->kode_barang }}">
  </div>
  <div class="mb-3">
    <label>Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" value="{{ $item->nama_barang }}">
  </div>
  <div class="mb-3">
    <label>Jumlah</label>
    <input type="number" name="jumlah_barang" class="form-control" value="{{ $item->jumlah_barang }}">
  </div>
  <div class="mb-3">
    <label>Satuan</label>
    <input type="text" name="satuan_barang" class="form-control" value="{{ $item->satuan_barang }}">
  </div>
  <div class="mb-3">
    <label>Harga Beli</label>
    <input type="number" name="harga_beli" step="0.01" class="form-control" value="{{ $item->harga_beli }}">
  </div>
  <div class="mb-3">
    <label>Status Barang</label><br>
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" name="status_barang" value="1" {{ $item->status_barang ? 'checked' : '' }}>
      <label class="form-check-label">Available</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" name="status_barang" value="0" {{ !$item->status_barang ? 'checked' : '' }}>
      <label class="form-check-label">Not Available</label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="/" class="btn btn-secondary">Kembali</a>
</form>
@endsection