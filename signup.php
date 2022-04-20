
<?php

include ("user.php");
$ins=new User();
if(isset($_POST['signup'])){
$ins->setusername($_POST['user']);
$ins->setpassword(password_hash($_POST['pass'],PASSWORD_DEFAULT));
if($ins->insertuser()){
  header('location:login.php');
}else{
    echo 'non ajouté';
}

}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand">Contacts list</a>
        <form class="form-inline">
          <a class=" my-2 my-sm-0 nav-link text-light" href="#">Login</a>
        </form>
    </nav>

    <div  class="container-fluid" >
      <div class="row justify-content-center mt-5">
          <div class="content col-sm-12 col-6 col-lg-3 mt-5"> 
            <h2 class="text-center"> Sign up </h2>
            <form method="post" action="" onsubmit="return validation()" > 
                <div class=" name mb-3 ">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Username" name="user" style="  width: 300px;"  minlength="3" >
                  <p id="img" style="margin-bottom: -1rem;"></p>
                  <span id="idemail" style="color:red; font-weight: bold;"></span>
                </div>
                 <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Password"  minlength="3" style="  width: 300px;">
                    <p id="img2"  style="margin-bottom: -1rem;"></p>
                    <span id="pass" style="color:red; font-weight: bold; "></span>
                  </div>
                 <div class="mb-3 ">
                  <label for="exampleInputPassword1" class="form-label">Password verify</label>
                  <input type="password" class="form-control" id="passwordver" name ="cpass"placeholder="Password verify" style="  width: 300px;" >
                  <p id="img22"  style="margin-bottom: -1rem;"></p>
                  <span id="pass2" style="color:red; font-weight: bold; "></span>
                </div>   
                 <input type="submit" name="signup" value="sing up"  class="btn btn-primary mt-5"  style="  width: 300px;">
                    <div style="color:black;"><span >Already have an account?</span></div>
                     <a class="text-primary text-decoration-underline" href="login.php"> <span >Login here </span></a> 
                     
                  </div>
            </form>
          </div>
      </div>  
    </div>
    <script src="javascript/login.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
</body>
</html>