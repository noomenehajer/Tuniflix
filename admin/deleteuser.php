<?php
	require_once 'config.php';
session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}	
    $id=$_GET["id"]; 
    if(empty($id)){
        header("Location:404.html");  
    }
    
    else{
    $query=$bdd->prepare("DELETE FROM utilisateur WHERE iduser=?");
    $query->execute([$id]);
    header("Location:users.php?id=".$id);
    }
?>