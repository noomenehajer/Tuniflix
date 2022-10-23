<?php
/***********************CONFIG**************************/
include 'config.php';
	session_start();
	
if (!empty($_GET['email'])&&!empty($_GET['password'])){
	$mail=$_GET['email'];
	$pass=md5($_GET['password']);
	
 $query=$bdd->prepare("SELECT * FROM utilisateur WHERE mailuser=?");
 $query->execute([$mail]);
 $user =$query->fetch();

	if (!$user){
	header('Location:signin.php?error=wrong mail or passoword');
	}
	else{
	if ($user['password']==$pass){
	$_SESSION['iduser']=$user['iduser'];
	$_SESSION['usernom']=$user['nom'];
	$_SESSION['userprenom']=$user['prenom'];
	$_SESSION['mailuser']=$user['mailuser'];
	$_SESSION['abonnement']=$user['abonnement'];
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