<?php
  include ("contact.php"); 
  $msg=null;
 session_start();
   $form=new contact();
   $form->setid_user($_SESSION["id"]);
   $row= $form->select();
  ?>
  
  <!DOCTYPE html>
   <html>
      <head>
        <meta charset="utf-8">
        <title>list </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      </head>
    <body>

    <?php
    $contact= new Contact();
    if(isset($_POST['save'])){

      if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['phone']) || 
      empty($_POST['address'])){
        $msg= '<div class="alert alert-danger" role="alert">
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
 <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                  </div>
                </div>      
                <div style="width:50%;"> <?php echo $msg; ?></div>
                  <div class="mt-3">
                   <button type="submit" class="btn btn-secondary mb-3" name="save" style=" margin-top: 15px;width: 146px;margin-left: 30%;">Save</button>
                  </div> 

              </div>
                </form>         
            </div>
      </div> 
    </div>
  </div>
</div>
      <nav class="navbar navbar-dark bg-dark justify-content-between">
          <a class="navbar-brand">Contacts list</a>
          <form class="form-inline">
          <div class="head" style="display:flex;">
          <a class=" my-2 my-sm-0 nav-link text-light" href="pageprofile.php" style="font-weight: bold;"><?php echo $_SESSION['username'];?></a>
          <a class=" my-2 my-sm-0 nav-link text-light" href="formulaire.php">contact</a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="logout.php">logout</a></div>
          </form>
        </nav> 

         <div class="container " style="margin-left: 16%;  margin-top: 10%;">
         <h2>Contacts list:</h2>
            <div class="table-responsive">
              <table class="table table-hover">
               <button type="submit" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style=" margin-left: 80%;">ADD NEW CONTACT</button></div>
                 <thead>
                    <tr>
                      <th>Contact list:</th>       
                    </tr>
                  </thead>
                  <tbody>    
                
                  <?php foreach($row as $rows){?>
                    <td><?= $rows['username']; ?></td>
                     <th><?= $rows['email']; ?></th>
                     <td><?= $rows['phone']; ?></td>
                     <td><?= $rows['addresse']; ?></td>
                     <td> <button class="btn btn-light"><a href="update.php?updateid=<?=$rows['id']?>"><ion-icon name="create-outline"></ion-icon></a></button>
                        <button class="btn btn-light" ><a href="dele.php?deletid=<?=$rows['id']?>"><ion-icon name="trash-outline"></ion-icon></a></button></td>
                    </tr>
                    <?php } ;
                  ?>
                  </tbody>
              </table>
            </div>
         </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script src="javascript/validation.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
    <script>
      $("#demo-form").validate({
      rules: {
        nom : {
          required: true,
          minlength: 3
        },
        phone: {
          required: true,
          phone: true
        },
        email: {
          required: true,
          email: true
        },
        address: {
          required: true,
          email: true
        },
      }
    });
    </script>
    
    </body>
</html>