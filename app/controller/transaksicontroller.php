<?php
require_once __DIR__ . '/../Model/Transaksi.php';

class TransaksiController {
    private $model;

    public function __construct($db) {
        $this->model = new Transaksi($db);
    }

    // Fungsi untuk menampilkan semua transaksi
    public function index() {
        $transaksi = $this->model->getAllTransaksi();
        include __DIR__.'/../view/viewtransaksi.php';
    }

    // Fungsi untuk menambahkan transaksi baru
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $transaksi = [
                'id_transaksi' => $_POST['id_transaksi'],
                'id_pelanggan' => $_POST['id_pelanggan'],
                'id_barang' => $_POST['id_barang'],
                'jumlah' => $_POST['jumlah'],
                'harga_total' => $_POST['harga_total'],
            ];
            
            $this->model->addTransaksi($transaksi);
            header('Location: index.php?page=transaksi'); // Redirect setelah menyimpan
            exit;
        }else {
            include __DIR__ . '/../view/viewtambahtransaksi.php'; // Menyertakan view untuk menambah pelanggan
        }
    }

    // Fungsi untuk menghapus transaksi berdasarkan ID
    public function delete($id_transaksi) {
        $this->model->deleteTransaksi($id_transaksi);
        header('Location: index.php?page=transaksi'); // Redirect setelah menghapus
        exit;
    }
}
