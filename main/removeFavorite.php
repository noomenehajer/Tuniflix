<?php 

/***********************CONFIG**************************/
include 'config.php';
session_start();
if (!isset($_SESSION['mailuser'])){	
header('Location:signin.php');
exit();
}
$movieid=$_GET["id"];
$query=$bdd->prepare("DELETE FROM mylist WHERE movieid=?");
$query->execute([$movieid]);
header('Location:profile.php');
exit();
?>