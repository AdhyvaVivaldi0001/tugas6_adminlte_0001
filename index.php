<?php
include_once 'app/controller/HomeController.php';
require_once 'config/database.php';
require_once 'app/Controller/barangcontroller.php';
require_once 'app/Controller/pelanggancontroller.php';
require_once 'app/Controller/transaksicontroller.php';

$app = new HomeController;
$app->index();

// Inisialisasi koneksi database
$db = (new Database())->getDBConnection();

// Cek parameter controller dan action di URL
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'barang'; // Default ke 'barang'
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'pelanggan';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'transaksi';
$action = isset($_GET['action']) ? $_GET['action'] : 'index'; // Default ke 'index'

// Cek apakah page yang diminta adalah 'home'
if (isset($_GET['page']) && $_GET['page'] == 'home') {
    include '../php-adminlte/app/view/main.php'; // Panggil halaman utama jika 'home'
    exit; // Keluar dari script
}

// Switch untuk menentukan controller mana yang harus dipanggil
switch ($controller) {
    case 'barang':
        $controllerObj = new BarangController($db);
        break;

    case 'pelanggan':
        $controllerObj = new PelangganController($db);
        break;

    case 'transaksi':
        $controllerObj = new TransaksiController($db);
        break;

    default:
        die("Controller tidak ditemukan.");
}

// Pengecekan dan pemisahan action
if (method_exists($controllerObj, $action)) {
    switch ($action) {
        case 'create':
            // Tambah data, tidak memerlukan parameter ID
            $controllerObj->create();
            break;

        case 'edit':
            // Edit data, memerlukan parameter ID
            if ($controller === 'barang') {
                $id_param = 'kode_barang';
            } elseif ($controller === 'pelanggan') {
                $id_param = 'id_pelanggan';
            }

            if (isset($_GET[$id_param])) {
                $controllerObj->edit($_GET[$id_param]); // Jalankan metode edit dengan ID
            } else {
                die("Parameter ID diperlukan untuk aksi edit.");
            }
            break;

        case 'delete':
            // Hapus data, memerlukan parameter ID
            if ($controller === 'barang') {
                $id_param = 'kode_barang';
            } elseif ($controller === 'pelanggan') {
                $id_param = 'id_pelanggan';
            } elseif ($controller === 'transaksi') {
                $id_param = 'id_transaksi'; // Menambahkan ID untuk transaksi
            }

            if (isset($_GET[$id_param])) {
                $controllerObj->delete($_GET[$id_param]); // Jalankan metode delete dengan ID
            } else {
                die("Parameter ID diperlukan untuk aksi delete.");
            }
            break;

        default:
            // Aksi lainnya, seperti index atau custom action
            $controllerObj->$action();
            break;
    }
} else {
    die("Action tidak ditemukan index.php ");
}
?>