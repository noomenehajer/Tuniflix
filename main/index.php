<?php 

/***********************CONFIG**************************/
include 'config.php';
session_start();
if (!isset($_SESSION['mailuser'])){	
header('Location:signin.php');
exit();
}

               /******************MOVIE***************************/
        $query= $bdd ->query("select * from film ORDER BY `film`.`idfilm` DESC ");
        $movies= $query ->fetchall();
               /******************END_MOVIE***************************/

$template ='index';
include "layout.phtml";
?>