<?php 

/***********************CONFIG**************************/
include 'config.php';

session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}
    if (isset ($_GET['id'])){
		$query= $bdd ->query("select * from film where idfilm='".$_GET['id']."'");
        $movie= $query ->fetch();
		$id=$movie['idfilm'];
		$titre=$movie['titre'];
		$description=$movie['description'];
		$year=$movie['year'];
		$categorie=$movie['categorie'];
		$urlcover=$movie['urlcover'];
		$urlfilm=$movie['urlfilm'];
		$abonnement=$movie['abonnement'];
	}

$template ='addMovie';
include "layout.phtml";
?>