<?php 
		/***********************CONFIG****************************************/ 
require_once 'config.php'; 

session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}
               /******************MOVIE***************************/
        $query= $bdd ->query("select * from film ORDER BY idfilm ");
        $movies= $query ->fetchall();
        $nb_movies=count($movies);
               /******************END_MOVIE***************************/
$template ='catalog';
include "layout.phtml";
?>