<?php 

include 'config.php';
session_start();
if (!isset($_SESSION['mailuser'])){	
header('Location:signin.php');
exit();
}
$movieid=$_GET["id"];

$query=$bdd->prepare("INSERT INTO `mylist`  VALUES (?,?)");
$query->execute([$movieid,$_SESSION['iduser']]);
header('Location:index.php');
exit();
?>