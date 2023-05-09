<?php 
include_once ("Database.php");

class Penerbit extends Database {
    public function all(){
        $sql = "SELECT * FROM kategori";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
}
?>