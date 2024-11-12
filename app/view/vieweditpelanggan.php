<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
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
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Pelanggan</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <input type="hidden" name="id_pelanggan" value="<?= htmlspecialchars($pelanggan['id_pelanggan']); ?>">
                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan:</label>
                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= htmlspecialchars($pelanggan['nama_pelanggan']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= htmlspecialchars($pelanggan['alamat']); ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
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
