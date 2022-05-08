
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
    <link rel="stylesheet" href="style11.css">

</head>
<body>
<nav class="navbar navbar-dark justify-content-between" style="background-color:#6b23f0;">
        <a class="navbar-brand">Contacts list</a>
        <form class="form-inline">
          <a class=" my-2 my-sm-0 nav-link text-light" href="#">Login</a>
        </form>
    </nav>

    <div  class="container-fluid" >
      <div class="row mt-5"style="margin-left:60px">
          <div class="content col-sm-12 col-6 col-lg-3 mt-5"> 
            <h2 class="text-center"style=" margin-bottom:10px;"> Sign up </h2>
            <form action="" method="POST" id="#demo-forms"> 

                <div class=" name mb-3 ">
                  <input type="text" class="form-control" id="username" placeholder="Username" name="user" style="width: 300px;" >
                  <p id="img" style="margin-bottom: 1rem;"></p>
                  <span id="idemail" style="color:red; font-weight: bold;"></span>
                </div>

                 <div class="mb-3 ">
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Password"  minlength="3" style="  width: 300px;">
                    <p id="img2"  style="margin-bottom: -1rem;"></p>
                    <span id="pass" style="color:red; font-weight: bold; "></span>
                  </div>

                 <div class="mb-3 ">
                  <input type="password" class="form-control" id="passwordver" name ="cpass"placeholder="Password verify" style="  width: 300px;" >
                  <p id="img22"  style="margin-bottom: -1rem;"></p>
                  <span id="pass2" style="color:red; font-weight: bold; "></span>
                </div>   
                 <input type="submit" name="signup" value="sing up"  class="btn btn-primary mt-5"  style="  width: 300px;">
                 <div  class="mt-3" >
                   <p>Already have an account?<a class="text-primary " href="login.php" style="text-decoration:none;">Login here</a></p></div>
       

                  </div>
            </form>
          </div>
      </div>  
    </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>

      <script>
      $("#demo-forms").validate({
      rules: {
        username : {
          required: true,
          minlength: 3
        },    
        password: {
          required: true,
          minlength: 5
        },
        passwordver: {
          equalTo : "#password"
        }
      }
    });

</body>
</html>