<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adhyva Mart</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper d-flex flex-column min-vh-100">

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
      <img src="public/AdminLTE/dist/img/avatar5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Adhyva Mart 0001</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="index.php?page=home" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'home') || !isset($_GET['page']) ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle text-secondary"></i>
              <p>Home Adhyva Mart</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=barang&action=index" class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] == 'barang') ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=pelanggan&action=index" class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] == 'pelanggan') ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=transaksi&action=index" class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] == 'transaksi') ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>


<!-- Scripts -->
<script src="public/AdminLTE/plugins/jquery/jquery.min.js"></script>
<script src="public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="public/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
