<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
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
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Barang</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" name="kode_barang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="number" name="stok" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Barang</button>
                            <a href="index.php?controller=barang&action=index" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Footer -->
    <footer class="main-footer">
        <strong>&copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>. All rights reserved.</strong>
    </footer>
</body>
</html>
