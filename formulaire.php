
  <?php
  include ("contact.php");
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

      <nav class="navbar navbar-dark bg-dark justify-content-between">
          <a class="navbar-brand">Contacts list</a>
          <form class="form-inline">
          <div class="head" style="display:flex;">
          <a class=" my-2 my-sm-0 nav-link text-light" href="ListContact.php">contact</a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="pageprofile.php">profile</a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="login.php">Login</a></div>
          </form>
        </nav> 
         <div class="container " style="margin-left: 16%;  margin-top: 10%;">
         <h2>Contacts list:</h2>
            <div class="table-responsive">
              <table class="table table-hover">
               <div class="boutton"> <a  href="ListContact.php"> <button type="submit" class="btn btn-secondary" style="margin-left: 84%;">ADD NEW CONTACT</button>  </a></div>
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
                     <td> <button class="btn btn-light"><a href="update.php?updateid=<?=$rows['id']?>"><img src="images/update.jpg" style=" width: 44px;"></a></button>
                        <button class="btn btn-light" ><a href="dele.php?deletid=<?=$rows['id']?>"><img src="images/delet.jpg" style=" width: 44px;"></a></button></td>
                    </tr>
                    <?php } ;
                  ?>
                  </tbody>
              </table>
            </div>
         </div>
    
    </body>
</html>