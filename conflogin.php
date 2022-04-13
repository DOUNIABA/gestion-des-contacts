
<?php
include('connexion.php');
class User extends Connection{
    private $id;
    private $username;
    private $password;

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


    public function login(){
            $db= $this->connect();         
            $req =(" SELECT * FROM user WHERE username =? ");    
            $exc =$db->prepare($req);
            $exc->execute([ 
            $this->username ] );
            $res=$exc->fetch(PDO::FETCH_ASSOC); 
            if(password_verify($this->password, $res['password'])==true) {
            $_SESSION
             return $res;
    }
       return $res;
              }
    }
    ?>