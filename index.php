
<?php
include "connexion.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

  </head>

<body>
<nav class="navbar navbar-dark justify-content-between" style="background-color:#6b23f0;">
        <a class="navbar-brand">Contacts list</a>
        <form class="form-inline">
          <a class=" my-2 my-sm-0 nav-link text-light" href="login.php">Connexion</a>
        </form>
      </nav> 
<div class="container-fluid" style=" margin-top: 15%;">
     <div class=" row justify-content-center px-3" style="margin-top: 10px;">
     
         <h1 style="font-size: 68px;">Welcome!</h1>
         <p class="fs-3" > Sign up to start creating your contacts list</p>
         <p class="fs-3">Already have an account?Login here</p>
   
     </div>
     <div class="mt-3">
        <button type="submit" class="btn btn-secondary mb-3" name="save" style=" margin-top: 15px;width: 146px; background-color:#6b23f0;"><a class="text-light " href="signup.php" style="text-decoration:none;">Signup</button>
        <button type="submit" class="btn btn-secondary mb-3" name="save" style=" margin-top: 15px;width: 146px ;background-color:#6b23f0;"><a class="text-light " href="login.php" style="text-decoration:none;">Signin</button>

     </div> 
  </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
