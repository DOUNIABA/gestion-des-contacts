<?php

include ("connexion.php");
Class User extends Connection{

    private $id;
    private $username;
    private $password;
    private $confipassword;

    public function getusername(){
        return $this->username;
    }

    public function setusername($username){
        $this->username=$username;
    }
    public function getpassword(){
        return $this->password;
    }

    public function setpassword($password){
        $this->password=$password;
    }
    public function getconfipassword(){
        return $this->confipassword;
    }

    public function setconfipassword($confipassword){
        $this->confipassword=$confipassword;
    }

    public function insertuser(){
            $conn = new Connection();
            $ss = $conn->connect();
          $req="INSERT INTO user (username, password) VALUES ( ?, ?)";
          $foo=$ss->prepare($req);
          $foo->bind_param("ss",$this->username, $this->password);
          return $foo -> execute();


    }

}
?>
