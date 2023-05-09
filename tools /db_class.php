<?php 
class myPOSDB{
    protected $host = DB_SERVER;
    protected $user = DB_USER;
    protected $pass = DB_PASSWORD;
    protected $database = DB_DATABASE;

    function connectDb(){
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        return $conn;
    }
}
?>