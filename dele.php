<?php
include ('contact.php');

if (isset($_GET['deletid'])) {
    $delet=new Contact();
    $delet->setid($_GET['deletid']);
    if($delet->delet()){
        header('location:formulaire.php');

    }else 
    echo 'can not add';
}
?>