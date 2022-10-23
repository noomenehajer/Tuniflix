<?php
	require_once 'config.php'; 
	session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}
    // On verifie l'id
    $id=$_GET["id"]; 
    if(empty($id)){
        header("Location:404.html");  
    }
    
    else{
         // On supprime de la base de données
    $query=$bdd->prepare("DELETE FROM film WHERE idfilm=?");
    $query->execute([$id]);
header("Location:catalog.php?statu=deleted");
    }
?>