<?php 

/***********************CONFIG**************************/
include 'config.php';

session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}
	if (isset ($_GET['id'])){
		$query= $bdd ->query("select * from utilisateur where iduser='".$_GET['id']."'");
        $user= $query ->fetch();
		$id=$user['iduser'];
		$nom=$user['nom'];
		$prenom=$user['prenom'];
		$mailuser=$user['mailuser'];
		$password=$user['password'];
		$abonnement=$user['abonnement'];
	}

$template ='addUser';
include "layout.phtml";
?>