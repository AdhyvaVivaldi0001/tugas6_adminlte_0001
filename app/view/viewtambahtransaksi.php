<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
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
                        <h3 class="card-title">Tambah Transaksi</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Id Transaksi</label>
                                <input type="text" name="id_transaksi" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Id Pelanggan</label>
                                <input type="text" name="id_pelanggan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Id Barang</label>
                                <input type="text" name="id_barang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Total</label>
                                <input type="number" name="harga_total" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
                            <a href="index.php?controller=transaksi&action=index" class="btn btn-primary">Kembali</a>
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
