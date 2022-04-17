
<?php
include('user.php');
$error = "";
if (isset($_POST['Login'])){
  
  $user = new User();
  $user->setpassword($_POST['password']);
  $user->setusername($_POST['username']);

   if($user->login()){
  
    header("Location: pageprofile.php");
    
  }else{
    $error = "incorect username or password !!";
      
   }  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


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
            <div class=" col-sm-12 col-6 col-lg-3 mt-5" style=" margin-right: 64%;  margin-bottom: 16%;"> 
      <form method="post" action="" onsubmit="return validation()">
         
          <h3 class="text-center mt-5" >Authenticate</h3>
          <div class="mt-5" >
            <input type="text" name="username" id="username" placeholder="username" style=" padding: 11px ;width: 447px;" >
            
            <p id="img" style="margin-bottom: -1rem;"></p>
            <span id="idemail" style="color:red; font-weight: bold;"></span>
          <div>

          <div  class="mt-5" >
            <input type="password" name="password" id="password" placeholder="Password" style="  padding: 11px ;width: 447px;" >
            <p id="img2"  style="margin-bottom: -1rem;"></p>
            <span id="pass" style="color:red; font-weight: bold; "></span>
        </div >
        
        <input type="submit" name="Login" value="login" class=" btn-primary mt-5 " style=" width: 447px;" >
        <div style="">No account? <a href="signup.php">Sign up here.</a></div>
      </form>
      </div>
      </div>
      </div>
      <script src="javascript/login.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2X.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>