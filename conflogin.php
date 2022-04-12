<?php
include('connexion.php');
class User extends Connection{

    public function login($username, $password ){
           $db= $this->connect();
            $req =(" SELECT * FROM user WHERE username =:username and password =:password");
            $exc =$db->prepare($req);
              $exc->execute([
                  ":username" => $username,
                  ":password" => $password
             ] );
            $res=$exc->fetch(PDO::FETCH_ASSOC);
           
       return $res;
              }
    }
    ?>