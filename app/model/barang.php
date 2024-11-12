<?php
class Barang {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllBarang() {
        $query = "SELECT * FROM barang";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
     // Mengambil data barang berdasarkan ID
     public function getBarangById($id) {
        $sql = "SELECT * FROM barang WHERE kode_barang = :kode_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':kode_barang', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Menambah data barang
    public function addBarang($data) {
    $sql = "INSERT INTO barang (kode_barang, nama_barang, harga, stok) VALUES (:kode_barang, :nama_barang, :harga, :stok)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':kode_barang', $data['kode_barang']);
    $stmt->bindParam(':nama_barang', $data['nama_barang']);
    $stmt->bindParam(':harga', $data['harga']);
    $stmt->bindParam(':stok', $data['stok']);
    return $stmt->execute();
}


    // Memperbarui data barang
    public function updateBarang($data) {
        // Pastikan kolom yang digunakan sesuai dengan struktur tabel barang
        $query = "UPDATE barang SET 
            nama_barang = :nama_barang,
            harga = :harga,
            stok = :stok
            WHERE kode_barang = :kode_barang"; // Gunakan kode_barang sebagai kriteria pencarian
    
        $stmt = $this->db->prepare($query);
    
        // Bind data
        $stmt->bindParam(':nama_barang', $data['nama_barang']);
        $stmt->bindParam(':harga', $data['harga']);
        $stmt->bindParam(':stok', $data['stok']);
        $stmt->bindParam(':kode_barang', $data['kode_barang']); // Pastikan parameter sesuai dengan kunci utama
    
        if ($stmt->execute()) {
            return true;
        }
    
        return false;
    }
    

    // Menghapus data barang
    public function deleteBarang($kode_barang) {
        // Pastikan untuk menggunakan kolom yang sesuai dalam kueri DELETE
        $query = "DELETE FROM barang WHERE kode_barang = :kode_barang";
    
        $stmt = $this->db->prepare($query);
    
        // Bind kode_barang ke parameter
        $stmt->bindParam(':kode_barang', $kode_barang);
    
        if ($stmt->execute()) {
            return true; // Mengembalikan true jika berhasil dihapus
        }
    
        return false; // Mengembalikan false jika gagal
    }
    
}
?>
