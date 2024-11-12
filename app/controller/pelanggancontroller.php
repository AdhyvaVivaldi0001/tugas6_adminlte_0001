<?php
require_once __DIR__ . '/../Model/pelanggan.php';

class PelangganController {
    private $pelangganModel;

    public function __construct($db) {
        $this->pelangganModel = new Pelanggan($db); // Menginstansiasi objek Pelanggan
    }
    
    public function index() {
        $data = $this->pelangganModel->getAllPelanggan(); // Memanggil metode untuk mendapatkan semua pelanggan
        include __DIR__ . '/../view/viewpelanggan.php'; // Memasukkan view
    }    

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id_pelanggan' => $_POST['id_pelanggan'], // Hanya jika diperlukan
                'nama_pelanggan' => $_POST['nama_pelanggan'],
                'alamat' => $_POST['alamat']
            ];
            $this->pelangganModel->addPelanggan($data);
            header('Location: index.php?controller=pelanggan&action=index'); // Redirect setelah penambahan
        } else {
            include __DIR__ . '/../view/viewtambahpelanggan.php'; // Menyertakan view untuk menambah pelanggan
        }
    }
    

    public function edit($id_pelanggan) {
        // Pastikan id_pelanggan ada dan valid
        if ($id_pelanggan) {
            $pelanggan = $this->pelangganModel->getPelangganById($id_pelanggan);
        }
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id_pelanggan'] = $id_pelanggan; // Menyisipkan ID untuk pembaruan
            $this->pelangganModel->updatePelanggan($_POST); // Memperbarui data di database
            header("Location: index.php?controller=pelanggan"); // Redirect setelah memperbarui data
            exit; // Pastikan untuk menghentikan eksekusi script
        }
    
        // Cek apakah pelanggan ditemukan
        if (!$pelanggan) {
            die("Data pelanggan tidak ditemukan."); // Anda bisa mengarahkan ke halaman error
        }
    
        include __DIR__ . '/../view/vieweditpelanggan.php'; // Menampilkan form edit pelanggan
    }
    

    public function delete($id_pelanggan) {
        if ($id_pelanggan) {
            $this->pelangganModel->deletePelanggan($id_pelanggan);
            header("Location: index.php?controller=pelanggan");
            exit; // Pastikan untuk menghentikan eksekusi setelah header
        } else {
            die("ID pelanggan tidak valid.");
        }
    }
}
?>