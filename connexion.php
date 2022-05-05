<?php
class Connection{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="gestion_contact";

    public function connect(){
        $conn = new PDO("mysql:host=$this->host; dbname=$this->database" ,$this->username ,$this->password);
        return $conn;
    }
}

?>