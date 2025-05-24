@extends('layouts.app')

@section('title', 'Penambahan Stok')

@section('content')
<form action="/inventory/add-stock/{{ $item->id_barang }}" method="POST">
  @csrf
  <p><strong>{{ $item->nama_barang }}</strong> (stok: {{ $item->jumlah_barang }})</p>
  <div class="mb-3">
    <label>Jumlah Tambahan</label>
    <input type="number" name="jumlah" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">Tambah</button>
  <a href="/" class="btn btn-secondary">Kembali</a>
</form>
@endsection