<?php 

/***********************CONFIG**************************/
include 'config.php';

session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}

	if (isset ($_GET['id'])){
		$query= $bdd ->query("select * from admin where idadmin='".$_GET['id']."'");
        $admin= $query ->fetch();
		$id=$admin['idadmin'];
		$nom=$admin['nom'];
		$prenom=$admin['prenom'];
		$mail=$admin['mail'];
		$password=$admin['password'];
		$role=$admin['role'];
	}

$template ='addAdmin';
include "layout.phtml";
?>