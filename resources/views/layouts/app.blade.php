<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Inventory System')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css" />

</head>
<body class="container py-4">
    <h2 class="mb-4">@yield('title')</h2>
    @yield('content')

    <script>
      // Konfirmasi sebelum hapus barang
      document.addEventListener('DOMContentLoaded', function () {
        const deleteLinks = document.querySelectorAll('.delete-link');
        deleteLinks.forEach(link => {
          link.addEventListener('click', function (e) {
            e.preventDefault();
            const href = this.getAttribute('href');

            Swal.fire({
              title: 'Hapus Barang?',
              text: 'Data akan dihapus permanen!',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Ya, hapus',
              cancelButtonText: 'Batal'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = href;
              }
            });
          });
        });
      });
    </script>

    @if(session('error'))
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal',
        text: '{{ session('error') }}'
      });
    </script>
    @endif

    @if(session('success'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '{{ session('success') }}'
      });
    </script>
    @endif
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
    <script>
      let table = new DataTable('#dataTable');
    </script>
</body>
</html>