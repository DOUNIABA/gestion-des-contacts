
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href=".css">
    </head>
    <body>
        <div class="container " style="margin-left: 16%;  margin-top: 10%;">
            <div class="table-responsive">
                <table class="table align-middle">
               <a  href="ListContact.php"> <button type="submit" class="btn btn-primary">ADD NEW CONTACT</button>  </a>

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
                     <td> <button class="btn btn-light"><a href="update.php?updateid=<?=$rows['id']?>">Edit</a></button>
                        <button class="btn btn-light" ><a href="dele.php?deletid=<?=$rows['id']?>">Delete</a></button></td>
                    </tr>
                    <?php } ;?>
                  </tbody>
                </table>
              </div>
        </div>
    
    </body>
</html>