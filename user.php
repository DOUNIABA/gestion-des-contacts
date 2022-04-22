 <?php
session_start();
 include ("connexion.php");
 Class User extends Connection{
    private $id;
    private $username;
    private $password;
    private $date_inscription;
 
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

    public function insertuser(){
        $req="INSERT INTO user (username, password,date_inscription) VALUES ( ?, ?,sysdate())";
        $foo=$this->connect()->prepare($req);     
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
        $_SESSION["id"]=$res["id"];
        $_SESSION['username']=$res['username'];
        $_SESSION['date_inscription']=$res['date_inscription'];
        $_SESSION['lastLogin'] = date('Y-m-d h:i:s a', time());
        
          return $res;
}
 else{
     echo'<div class="alert alert-danger" role="alert">
       **Something went wrong!!**
         </div>';
 } } }
  
 
?>