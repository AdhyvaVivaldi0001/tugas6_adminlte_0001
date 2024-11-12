<?php
class Transaksi{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllTransaksi() {
        $query = "SELECT * FROM transaksi";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTransaksiById($id_transaksi) {
        $sql = "SELECT * FROM transaksi WHERE id_transaksi = :id_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_transaksi', $id_transaksi);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addTransaksi($data) {
        $query = "INSERT INTO transaksi (id_transaksi, id_pelanggan, id_barang, jumlah, harga_total, tanggal) VALUES (:id_transaksi, :id_pelanggan, :id_barang, :jumlah, :harga_total, NOW())";
        $statement = $this->db->prepare($query);
        
        // Debugging: Tampilkan data yang akan dieksekusi
        print_r($data);
        
        return $statement->execute([
            ':id_transaksi' => $data['id_transaksi'],
            ':id_pelanggan' => $data['id_pelanggan'],
            ':id_barang' => $data['id_barang'],
            ':jumlah' => $data['jumlah'],
            ':harga_total' => $data['harga_total'],
        ]);
    }
    
    public function deleteTransaksi($id_transaksi) {
        $query = "DELETE FROM transaksi WHERE id_transaksi = :id_transaksi";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id_transaksi', $id_transaksi);
        return $statement->execute();
    }
    
}
?>