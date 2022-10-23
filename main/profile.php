<?php 

/***********************CONFIG**************************/
include 'config.php';
session_start();
if (!isset($_SESSION['mailuser'])){	
header('Location:signin.php');
exit();
}

               /******************MOVIE***************************/
        $query= $bdd ->query("SELECT * FROM mylist M , film F where m.movieid=F.idfilm and userid= ".$_SESSION['iduser']);
        $favorites= $query ->fetchall();
               /******************END_MOVIE***************************/

$template ='profile';
include "layout.phtml";
?>