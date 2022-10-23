<?php
/***********************CONFIG**************************/
include 'config.php';
	session_start();
	
if (!empty($_GET['email'])&&!empty($_GET['password'])){
	$mail=$_GET['email'];
	$pass=$_GET['password'];
	
 $query=$bdd->prepare("SELECT * FROM admin WHERE mail=?");
 $query->execute([$mail]);
 $admin =$query->fetch();

	if (!$admin){
	header('Location:signin.php?error=wrong mail or passoword');
	}
	else{
	if ($admin['password']==$pass){
	$_SESSION['nom']=$admin['nom'];
	$_SESSION['prenom']=$admin['prenom'];
	$_SESSION['mail']=$admin['mail'];
	$_SESSION['role']=$admin['role'];
	header('Location:index.php');
	}
	else{
		header('Location:signin.php?error=wrong mail or passoword');

	
	}
	}
}
	else{
		header('Location:signin.php?error=One or more of the fields is empty');
	}
?>