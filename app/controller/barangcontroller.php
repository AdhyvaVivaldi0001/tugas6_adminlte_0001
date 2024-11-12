<?php
require_once __DIR__ . '/../Model/barang.php';

class BarangController {
    private $barang;

    public function __construct($db) {
        $this->barang = new Barang($db);
    }

    // Menampilkan semua barang
    public function index() {
        $data = $this->barang->getAllBarang();
        include __DIR__ . '/../view/viewbarang.php';
    }
    
    // Menambahkan barang
    public function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Jika ada data POST, proses penambahan barang
        if ($this->barang->addBarang($_POST)) {
            header("Location: index.php?controller=barang"); // Redirect setelah menambahkan
            exit;
        } else {
            die("Gagal menambahkan barang.");
        }
    }
        include __DIR__.'/../view/viewtambahbarang.php'; // Tampilkan view untuk tambah barang
    }


    // Mengedit barang
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Jika ada data POST, proses update
            if ($this->barang->updateBarang($_POST)) {
                header("Location: index.php?controller=barang"); // Redirect setelah memperbarui
                exit;
            }
        }

        // Ambil data barang berdasarkan ID
        $barang = $this->barang->getBarangById($id);
        if (!$barang) {
            die("Data barang tidak ditemukan.");
        }

        include __DIR__. '/../view/vieweditbarang.php'; // Tampilkan view untuk edit
    }

    // Menghapus barang
    public function delete($id) {
        if ($this->barang->deleteBarang($id)) {
            header("Location: index.php?controller=barang"); // Redirect setelah menghapus
            exit;
        } else {
            die("Gagal menghapus barang.");
        }
    }
}
?>
