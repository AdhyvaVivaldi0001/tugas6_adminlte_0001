<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css">
    <title>Home</title>
</head>
<style>
    html, body {
        height: 100%;
    }
    body {
        display: flex;
        flex-direction: column;
    }
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
    <div class="content-wrapper mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center text-success">WELCOME TO ADHYVA MART!!!!</h2>
            </div>
            <div class="card-body">
                <p class="text-center">hi!</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <p class="text-center">&copy; <?php echo date("Y"); ?> ADHYVA MART</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
