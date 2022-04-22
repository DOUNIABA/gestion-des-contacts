
<?php
include('connexion.php');
 Class Contact extends Connection{
     
    private $id;
    private $username;
    private $phone;
    private $email;
    private $address;
    private $id_user;

    public function getid(){
        return $this->id;
    }

    public function setid($id){
        $this->id=$id;
    }
    
    public function getusername(){
        return $this->username;
    }

    public function setusername($username){
        $this->username=$username;
    }

    public function getphone(){
        return $this->phone;
    }

    public function setphone($phone){
        $this->phone=$phone;
    }

    public function getemail(){
        return $this->email;
    }

    public function setemail($email){
        $this->email=$email;
    }
    public function getaddress(){
        return $this->address;
    }

    public function setaddress($address){
        $this->address=$address;
    }
    public function setid_user($id_user){
        $this->id_user=$id_user;
    }
   
   public function addcontact(){
   $req= $this->connect()->prepare("INSERT INTO contact (username,email,phone,addresse,id_user)VALUES (?,?,?,?,?)");
   $req->execute([
       $this->username,
       $this->email,
       $this->phone,     
       $this->address,
       $this->id_user
   ]);
 return true;
   } 

   public function select(){
       $req=$this->connect()->prepare("SELECT * FROM contact where id_user=?");
       $req->execute([$this->id_user]);
       return $req->fetchAll();
   }

   public function delet(){
       $req=$this->connect()->prepare("delete FROM contact where id=?");
       $req->execute([$this->id]);
       return true;
   }

   public function update(){
       $req=$this->connect()->prepare("UPDATE contact SET username=?,email=?,phone=?,addresse=? WHERE id=?");
       $req->execute([
        $this->username,
        $this->email,
        $this->phone,     
        $this->address  , $this->id]);
       return $req;
   }

   public function select_COTACT(){
    $req=$this->connect()->prepare("SELECT * FROM contact where id=?");
    $req->execute([$this->id]);
    return $req->fetchAll();
}

}

?>
