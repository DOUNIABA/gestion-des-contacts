
<?php

include ('contact.php');
  $edit=new contact();
  $edit->setid($_GET['updateid']);
  $result=$edit->select_COTACT();
  if (isset($_POST['update'])) {
    if (empty($_POST['email']) || empty($_POST['nom']) || empty($_POST['address']) || 
    empty($_POST['phone']))
    {
      echo '<div class="alert alert-danger" role="alert">
      Veuillez remplir tous les champs!
    </div>';}
    else {
$edit->setemail($_POST['email']);
$edit->setusername($_POST['nom']);
$edit->setaddress($_POST['address']);
$edit->setphone($_POST['phone']);
if($edit->update()){
   header('location:formulaire.php');
}
    }

}
$rows=$result[0];?>

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
      
        <main>
            <div class="container" >
              <div class="content" style="margin-left: 16%; margin-top:17%">
                 <div><h1>Contacts</h1></div>
                <div class="list">
                  
                    <h3>Edit contact</h3>              
                  </div>

                <form class="form-container" action="" method="POST" onsubmit="return validation()">  
                  <div class="mb-3 " style="width: 40%;">
                  <label for="exampleFormControlInput1" class="form-label">Name</label>
                  <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name"  value="<?php echo $rows['username']; ?>">
                  <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                  <span id="nomid" style="color:red; font-weight: bold;"></span>
                </div>

                    <div class="mb-3"  style="width: 40%;">
                      <label for="exampleFormControlInput1" class="form-label">Phone</label>
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone"  value="<?php echo $rows['phone']; ?>">
                      <p id="img2" style="margin-bottom: -1rem;"></p>
                      <span id="phoneid"style="color:red; font-weight: bold;"></span>
                    </div>
               
                    <div class="mb-3"  style="width: 40%;">
                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"  value="<?php echo $rows['email']; ?>">
                      <p id="img3" style="margin-bottom: -1rem;"></p>
                      <span id="mailid" style="color:red; font-weight: bold;"></span>
                    </div>
                    
                  <div class="mb-3"  style="width: 40%;">
                  <label for="exampleFormControlInput1" class="form-label">Addresse</label>
                      <input type="text" class="form-control" id="add" name="address" value="<?php echo $rows['addresse']; ?>">
                    <p id="img4" style="margin-bottom: -1rem;"></p>
                      <span id="addid" style="color:red; font-weight: bold;"></span>
                  </div>
                 
                  <div class="col-auto mt-5" >
                   <button type="submit" class="btn btn-secondary mb-5 " name="update">update</button>
                  </div>
              </div>
                </form>                 
            </div>
        </main>
        <script src="javascript/validation.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
    </body>
</html>