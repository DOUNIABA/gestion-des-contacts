
<?php
include('contact.php');
session_start();
$contact= new Contact();
if(isset($_POST['save'])){

    if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['phone']) || 
    empty($_POST['address']))
    {
      echo '<div class="alert alert-danger" role="alert">
    **Something went wrong!!**
    </div>';}
    else {
  $contact->setusername($_POST['nom']);
  $contact->setemail($_POST['email']);
  $contact->setphone($_POST['phone']);
  $contact->setaddress($_POST['address']);
  $contact->setid_user($_SESSION["id"]);
  if($contact->addcontact()){
    header('location:formulaire.php');
    }
else{
       echo "non ajouté";}
  
  }
     
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>list contact</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>        
        <link rel="stylesheet" href="style1.css">
      </head>
    <body>
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand">Contacts list</a>
        <form class="form-inline">
           <div class="head" style="display:flex;">
            <a class=" my-2 my-sm-0 nav-link text-light" href="ListContact.php">contact</a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="pageprofile.php">profile</a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="login.php">Login</a></div>
        </form>
      </nav>
      
        <main>
            <div class="container" >
              <div class="content" style="margin-left: 16%;margin-top: 16%;">
                 <div style="text-align:center;"><h1>Contacts</h1></div>
                <div class="list">
                    <h3>Add contact</h3>              
                  </div>
                  <form class="form-container" action="" method="POST" id="demo-form" onsubmit="return validationContact()">  

                  <div style="display:flex;" > 
                  <div class="mb-3 " style="width: 40%;">                  
                  <input type="text" class="form-control" id="nom" name="nom" placeholder="Name" >
                  <span id="nomid" style="color:red; font-weight: bold;"></span>
                </div>

                    <div class="mb-3"  style="width: 40%;">
                      <input type="text" class="form-control" name="phone" id="phone" placeholder=" Phone Number"  style=" margin-left: 27px;">
                      <span id="phonid"style="color:red; font-weight: bold;"></span>
                    </div></div>

                    <div style="display:flex;" > 
                    <div class="mt-3"  style="width: 40%;">
                    <input type="email" class="form-control" id="email" name="email"placeholder="Email address" data-parsley-type="email"  >
                      <span id="mailid" style="color:red; font-weight: bold;"></span>
                    </div>
                    
                  <div class="mt-3"  style="width: 40%;">
                    <input type="text" class="form-control" id="adress" name="address" placeholder="Address"  style=" margin-left: 27px;">
                      <span id="addid" style=" font-weight: bold;"></span>
                  </div></div>
                 
                  <div class="mt-3">
                   <button type="submit" class="btn btn-secondary mb-3" name="save" style=" margin-top: 15px;width: 146px;margin-left: 30%;">Save</button>
                  </div> 
              </div>
                </form>         
            </div>
        </main>
        
        <script src="javascript/validation.js"></script>

    </body>
</html>