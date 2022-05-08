
<?php
session_start();
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
<nav class="navbar navbar-dark justify-content-between" style="background-color:#6b23f0;">
        <a class="navbar-brand">Contacts list</a>
        <form class="form-inline">
           <div class="head" style="display:flex;">
           <nav class="navbar navbar-dark justify-content-between">
        <form class="form-inline">
           <div class="head" style="display:flex;">
            <a class=" my-2 my-sm-0 nav-link text-light" href="pageprofile.php" style="font-weight: bold;"><?php echo $_SESSION['username'];?></a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="formulaire.php">Contact</a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="logout.php">Logout</a></div>
        </form>
      </nav>

        </form>
      </nav>
      <div class="d-flex justify-content-center align-items-center">
           <div  class=" m-5 w-50">
            <h1 class="my-5" style="margin-right:20px;"> Welcome, <?php echo $_SESSION['username'];?> !</h1>
            <h3 class=" my-5"> Your  profile info:</h3>
            <table class="table table-hover">       
                <tbody>            
                  <tr>
                    <td class="fs-5 fw-bold ">Username</td>
                    <td class="fs-5 fw-bold">Signup date:</td>
                    <td class="fs-5 fw-bold">Last login:</td>
                    <td> 
         
                   </td>
                  </tr>
                 
                  <tr>                   
                   <td><?php echo $_SESSION['username'];?></td>                      
                  <td><?php echo $_SESSION['date_inscription'];?> </td>               
                    <td><?php echo $_SESSION['lastLogin']; ?></td>
                  </tr>             
                </tbody>
              </table>
        </div>
      </div>       
</body>
</html>

