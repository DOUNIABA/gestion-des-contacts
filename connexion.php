
<?php

class Connection{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="gestion_contact";

 
    public function connect(){
           $conn=new mysqli($this->host, $this->username, $this->password, $this->database);
           return $conn;
    }
}


?>