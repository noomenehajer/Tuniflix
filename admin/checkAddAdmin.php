<?php
	require_once 'config.php'; 
	session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}

   if(!isset($_GET)){
        header("Location:404.html");  
    }
    if(empty($_GET["email"])||empty($_GET["pass"])||empty($_GET["role"])||empty($_GET["firstname"])||empty($_GET["lastname"])){
        header("Location:addAdmin.php?error=1");
    }
		else if(!empty($_GET['update'])){
		
		$id=htmlspecialchars($_GET["id"]);
		$mail=htmlspecialchars($_GET["email"]);
		$password=htmlspecialchars($_GET["pass"]);
		$role=htmlspecialchars($_GET["role"]);
		$prenom=htmlspecialchars($_GET["firstname"]);
		$nom=htmlspecialchars($_GET["lastname"]);
		
		$req = $bdd->prepare('UPDATE admin SET `nom` = :nom, `prenom` = :prenom, `mail` = :mail, `password` = :password, `role` = :role WHERE `admin`.`idadmin` = :id');

		$req->execute(array(

       'nom' => $nom,

       'prenom' => $prenom,

       'mail' => $mail,
	   
	          'password' => $password,

       'role' => $role,
	   
	          'id' => $id


       ));
	

		header("Location:admins.php");
		
		
		}
		
    else{

   $mail=htmlspecialchars($_GET["email"]);
   $password=htmlspecialchars($_GET["pass"]);
   $role=htmlspecialchars($_GET["role"]);
   $prenom=htmlspecialchars($_GET["firstname"]);
   $nom=htmlspecialchars($_GET["lastname"]);

   $query=$bdd->prepare("INSERT INTO `admin` (`idadmin`, `mail`, `password`, `role`, `prenom`, `nom`) VALUES (NULL,?,?,?,?,?)");
    $query->execute([$mail,$password,$role,$prenom,$nom]);
header("Location:admins.php");

    }

?>