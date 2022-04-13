<?php

include ("connexion.php");
Class User {
    
    private $id;
    private $username;
    private $password;
 


    public function insertuser(){
         $conn = new Connection();
         $ss = $conn->connect();
          $req="INSERT INTO user (username, password) VALUES ( ?, ?)";
          $foo=$ss->prepare($req);
          
         $foo->execute(
              [
                $this->username, $this->password
              ]
          );
          return $foo;
       
    }


    public function login(){
        $db= $this->connect();         
        $req =(" SELECT * FROM user WHERE username =? ");    
        $exc =$db->prepare($req);
        $exc->execute([ 
        $this->username ] );
        $res=$exc->fetch(PDO::FETCH_ASSOC); 
        if(password_verify($this->password, $res['password'])==true) {
        
        $_SESSION['username']=$res['username'];
        $_SESSION["id"]=$res["id"];


         return $res;
}
 else{
     echo"n'existe pas";
 } 
          }


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
}
?>


