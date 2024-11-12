<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
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
<body>
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Pelanggan</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Id Pelanggan</label>
                                <input type="text" name="id_pelanggan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="index.php?controller=pelanggan&action=index" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <strong>&copy; 2024 <a href="https://yourwebsite.com">YourWebsite</a>. All rights reserved.</strong>
    </footer>
</body>
</html>
