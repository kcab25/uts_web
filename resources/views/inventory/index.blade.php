@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
<a href="/inventory/create" class="btn btn-primary mb-3">Tambah Barang</a>
<table class="table table-bordered">
    <thead class="table-light">
      <tr>
        <th>ID</th><th>Kode</th><th>Nama</th><th>Jumlah</th><th>Satuan</th><th>Harga</th><th>Status</th><th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
        <tr>
          <td>{{ $item->id_barang }}</td>
          <td>{{ $item->kode_barang }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ $item->jumlah_barang }}</td>
          <td>{{ $item->satuan_barang }}</td>
          <td>{{ number_format($item->harga_beli, 0, ',', '.') }}</td>
          <td>
            <span class="badge {{ $item->status_barang ? 'bg-success' : 'bg-secondary' }}">
              {{ $item->status_barang ? 'Available' : 'Not Available' }}
            </span>
          </td>
          <td>
            <a href="/inventory/edit/{{ $item->id_barang }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="/inventory/delete/{{ $item->id_barang }}" class="btn btn-danger btn-sm delete-link">Hapus</a>
            <a href="/inventory/use/{{ $item->id_barang }}" class="btn btn-secondary btn-sm">Pakai</a>
            <a href="/inventory/add-stock/{{ $item->id_barang }}" class="btn btn-success btn-sm">Tambah Stok</a>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection