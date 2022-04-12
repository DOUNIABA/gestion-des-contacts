
<?php

include ("confsingnup.php");
$ins=new User();

if(isset($_POST['signup'])){
$ins->setpassword($_POST['pass']);
$ins->setusername($_POST['user']);
if($ins->insertuser()){
    echo 'bien ajouté';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Sign up</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand">Contacts list</a>
        <form class="form-inline">
          <a class=" my-2 my-sm-0 nav-link text-light" href="#">Login</a>
        </form>
    </nav>

    <div  class="container-fluid">
      <div class="row justify-content-center mt-5">
          <div class=" col-sm-12 col-6 col-lg-3 mt-5"> 
            <h2 class="text-center"> Sign up</h2>
            <form method="post" action="" onsubmit="return validation()"> 
                <div class="mb-3 ">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Username" name="user" style=" padding: 11px ;width: 447px;" >
                  <p id="img" style="margin-bottom: -1rem;"></p>
                  <span id="idemail" style="color:red; font-weight: bold;"></span>
                </div>
                 <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Password" style=" padding: 11px ;width: 447px;" >
                    <p id="img2"  style="margin-bottom: -1rem;"></p>
                    <span id="pass" style="color:red; font-weight: bold; "></span>
                  </div>
                 <div class="mb-3 ">
                  <label for="exampleInputPassword1" class="form-label">Password verify</label>
                  <input type="password" class="form-control" id="passwordver" name ="cpass"placeholder="Password verify" style=" padding: 11px ;width: 447px;" >
                  <p id="img22"  style="margin-bottom: -1rem;"></p>
                  <span id="pass2" style="color:red; font-weight: bold; "></span>
                </div>   
                 <button type="submit" name="signup" class="btn btn-primary mt-5"  style=" width: 447px;">Sign up</button>
                 <div class="mt-3 mb-3 text-center">
                    <span class="text-muted">
                   Already have an account?
                    </span>
                     <a class="text-primary text-decoration-underline" href="login.php"> <span >Login </span></a> 
                     her
                  </div>
            </form>
          </div>
      </div>  
    </div>
      <script src="javascript/login.js"></script>
</body>
</html>