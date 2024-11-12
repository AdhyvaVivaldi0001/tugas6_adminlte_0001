<?php
class Pelanggan {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllPelanggan() {
        $query = "SELECT * FROM pelanggan";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPelangganById($id_pelanggan) {
        $sql = "SELECT * FROM pelanggan WHERE id_pelanggan = :id_pelanggan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function addPelanggan($data) {
        $query = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat) VALUES (:id_pelanggan, :nama_pelanggan, :alamat)";
        $statement = $this->db->prepare($query);
        return $statement->execute([
            ':id_pelanggan' => $data['id_pelanggan'], // Pastikan ini ada
            ':nama_pelanggan' => $data['nama_pelanggan'],
            ':alamat' => $data['alamat']
        ]);
    }
    

    public function updatePelanggan($data) {
        $query = "UPDATE pelanggan SET nama_pelanggan = :nama_pelanggan, alamat = :alamat WHERE id_pelanggan = :id_pelanggan";
        $statement = $this->db->prepare($query);
        return $statement->execute($data);
    }

    public function deletePelanggan($id_pelanggan) {
        $query = "DELETE FROM pelanggan WHERE id_pelanggan = :id_pelanggan";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id_pelanggan', $id_pelanggan);
        return $statement->execute();
    }
}
?>