@extends('layouts.app')

@section('title', 'Pemakaian Barang')

@section('content')
<form action="/inventory/use/{{ $item->id_barang }}" method="POST" onsubmit="return validateUse()">
  @csrf
  <p><strong>{{ $item->nama_barang }}</strong> (stok: {{ $item->jumlah_barang }})</p>
  <div class="mb-3">
    <label>Jumlah Digunakan</label>
    <input type="number" name="jumlah" id="jumlah" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-danger">Gunakan</button>
  <a href="/" class="btn btn-secondary">Kembali</a>
</form>
<script>
function validateUse() {
  const jumlah = document.getElementById('jumlah').value;
  if (!jumlah || jumlah <= 0) {
    Swal.fire({
      icon: 'warning',
      title: 'Jumlah tidak valid',
      text: 'Jumlah pemakaian harus lebih dari 0'
    });
    return false;
  }
  return true;
}
</script>
@endsection
