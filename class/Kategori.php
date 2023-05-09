<?php 
include_once ("Database.php");

class Penerbit extends Database {
    //function get all kategori 
    public function all()
    {
        $sql = "SELECT * FROM kategori";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    //function create kategori
    public function create($data)
    {
        $kode = $data["id_kategori"];
        $nmkategori = $data["nama_kategori"];

        $sql = "INSERT INTO kategori('id_kategori', 'nama_kategori') VALUES ('$kode', '$nmkategori')";
    }
}
?>