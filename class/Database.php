<?php 
class Database{
    //function 
    private static $hostname = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database    = "";

    protected $db; 
    
    public function __construct(){
        $this->db = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
    }

}
?>