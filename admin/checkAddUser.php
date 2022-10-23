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
    if(empty($_GET["nom"])||empty($_GET["prenom"])||empty($_GET["mailuser"])||empty($_GET["password"])||empty($_GET["abonnement"])){
        header("Location:addUser.php?error=1");
    }
	else if(!empty($_GET['update'])){
		
		$id=htmlspecialchars($_GET["id"]);
		$nom=htmlspecialchars($_GET["nom"]);
		$prenom=htmlspecialchars($_GET["prenom"]);
		$mailuser=htmlspecialchars($_GET["mailuser"]);
		$password=htmlspecialchars($_GET["password"]);
		$abonnement=htmlspecialchars($_GET["abonnement"]);
		
		$req = $bdd->prepare('UPDATE utilisateur SET `nom` = :nom, `prenom` = :prenom, `mailuser` = :mailuser, `password` = :password, `abonnement` = :abonnement WHERE `utilisateur`.`iduser` = :id');

		$req->execute(array(

       'nom' => $nom,

       'prenom' => $prenom,

       'mailuser' => $mailuser,
	   
	          'password' => $password,

       'abonnement' => $abonnement,
	   
	          'id' => $id


       ));
	

		header("Location:users.php");
    
	}
    else{

   $nom=htmlspecialchars($_GET["nom"]);
   $prenom=htmlspecialchars($_GET["prenom"]);
   $mailuser=htmlspecialchars($_GET["mailuser"]);
   $password=htmlspecialchars($_GET["password"]);
   $abonnement=htmlspecialchars($_GET["abonnement"]);
   $query=$bdd->prepare("INSERT INTO `utilisateur` (`iduser`, `nom`, `prenom`, `mailuser`, `password`, `abonnement`) VALUES (NULL,?,?,?,?,?)");
    $query->execute([$nom,$prenom,$mailuser,$password,$abonnement]);
    header("Location:users.php");

    }

?>