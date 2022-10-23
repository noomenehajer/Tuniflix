<?php 

/***********************CONFIG**************************/
include 'config.php';
	session_start();
if (!isset($_SESSION['mailuser'])){	
header('Location:signin.php');
exit();
}
	if(ctype_digit($_GET['id'])){
		$query= $bdd->query('SELECT * FROM film WHERE idfilm='.$_GET['id']);
		$movies= $query ->fetchall();
	}
	   else {
			header('Location:404.html');

		}
if (count($movies)!=1){
				header('Location:404.html');

}
$template ='play';
include "layout.phtml";
?>