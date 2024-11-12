<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .navbar-nav li a {
        color: white !important;
        margin-right: 15px;
    }
    .navbar-nav li a.active {
        font-weight: bold;
    }
    footer {
        text-align: center;
        padding: 10px 0;
        background-color: #f8f9fa;
        width: 100%;
    }
</style>
<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Transaksi</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Id Transaksi</th>
                <th>Id Pelanggan</th>
                <th>Id Barang</th>
                <th>Jumlah</th>
                <th>Harga Total</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($transaksi) && is_array($transaksi)): ?>
                <?php foreach ($transaksi as $index => $item): ?>
                  <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($item['id_transaksi']); ?></td>
                    <td><?= htmlspecialchars($item['id_pelanggan']); ?></td>
                    <td><?= htmlspecialchars($item['id_barang']); ?></td>
                    <td><?= htmlspecialchars($item['jumlah']); ?></td>
                    <td><?= htmlspecialchars($item['harga_total']); ?></td>
                    <td><?= htmlspecialchars($item['tanggal']); ?></td>
                    <td>
                      <a href="index.php?controller=transaksi&action=delete&id_transaksi=<?= urlencode($item['id_transaksi']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="8" class="text-center">Data transaksi tidak tersedia.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
          <br>
          <a href="index.php?controller=transaksi&action=create" class="btn btn-primary">Tambah Transaksi</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</body>
</html>
