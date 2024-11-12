<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
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
  <div class="content-wrapper">
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Pelanggan</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Id Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($data) && is_array($data)): ?>
                <?php foreach ($data as $index => $item): ?>
                  <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($item['id_pelanggan']); ?></td>
                    <td><?= htmlspecialchars($item['nama_pelanggan']); ?></td>
                    <td><?= htmlspecialchars($item['alamat']); ?></td>
                    <td>
                      <a href="index.php?controller=pelanggan&action=edit&id_pelanggan=<?= urlencode($item['id_pelanggan']); ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="index.php?controller=pelanggan&action=delete&id_pelanggan=<?= urlencode($item['id_pelanggan']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?');">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="5" class="text-center">Data tidak tersedia.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
          <br>
          <a href="index.php?controller=pelanggan&action=create" class="btn btn-primary">Tambah Pelanggan</a>
          
        </div>
      </div>
    </section>
  </div>
  
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</body>
</html>
