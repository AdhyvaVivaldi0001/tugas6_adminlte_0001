<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    
    .navbar-nav li a {
        color: white !important; /* Buat teks berwarna putih */
        margin-right: 15px;      /* Tambahkan jarak antar item */
    }
    .navbar-nav li a.active {
        font-weight: bold;       /* Berikan gaya berbeda untuk yang aktif */
    }
    footer {
            text-align: center; /* Rata tengah teks */
            padding: 10px 0;   /* Tambahkan padding */
            background-color: #f8f9fa; /* Warna latar belakang abu-abu terang */
            width: 100%; /* Lebar penuh */
        }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Barang</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($data) && is_array($data)): ?>
                <?php foreach ($data as $index => $item): ?>
                  <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($item['kode_barang']); ?></td>
                    <td><?= htmlspecialchars($item['nama_barang']); ?></td>
                    <td><?= htmlspecialchars($item['harga']); ?></td>
                    <td><?= htmlspecialchars($item['stok']); ?></td>
                    <td>
                      <a href="index.php?controller=barang&action=edit&kode_barang=<?= urlencode($item['kode_barang']); ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="index.php?controller=barang&action=delete&kode_barang=<?= urlencode($item['kode_barang']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="6" class="text-center">Data tidak tersedia.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
          <br>
          <a href="index.php?controller=barang&action=create" class="btn btn-primary">Tambah Barang</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>



