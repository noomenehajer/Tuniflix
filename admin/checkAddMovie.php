<?php
	// On inclu la connexion à la bdd
require_once 'config.php';  
session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}
  if(!isset($_GET)){
        header("Location:404.html");  
    }
	

// On vérifie si les champs sont vides
   else if(empty($_GET["titre"])||empty($_GET["description"])||empty($_GET["categorie"])||empty($_GET["urlcover"])||empty($_GET["year"])){
        header("Location:addMovie.php?error=empty");
    } 
	else if(!empty($_GET['update'])){
		
		$id=htmlspecialchars($_GET["id"]);
		$titre=htmlspecialchars($_GET["titre"]);
		$categorie=htmlspecialchars($_GET["categorie"]);
		$description=htmlspecialchars($_GET["description"]);
		$year=htmlspecialchars($_GET["year"]);
		$urlfilm=htmlspecialchars($_GET["urlfilm"]);
		$urlcover=htmlspecialchars($_GET["urlcover"]);
		$abonnement=htmlspecialchars($_GET["abonnement"]);
    
		$req = $bdd->prepare('UPDATE film SET `titre` = :titre, `categorie` = :categorie, `description` = :description, `year` = :year, `urlfilm` = :urlfilm, `urlcover` = :urlcover, `abonnement` = :abonnement WHERE `film`.`idfilm` = :id');

		$req->execute(array(

       'titre' => $titre,

       'categorie' => $categorie,

       'description' => $description,
	   
	          'year' => $year,

       'urlfilm' => $urlfilm,

       'urlcover' => $urlcover,

       'abonnement' => $abonnement,
	   
	          'id' => $id


       ));
	

		header("Location:catalog.php");

	}
    else{
  //  XSS
	$titre=htmlspecialchars($_GET["titre"]);
   $categorie=htmlspecialchars($_GET["categorie"]);
   $description=htmlspecialchars($_GET["description"]);
   $year=htmlspecialchars($_GET["year"]);
   $urlfilm=htmlspecialchars($_GET["urlfilm"]);
   $urlcover=htmlspecialchars($_GET["urlcover"]);
   $abonnement=htmlspecialchars($_GET["abonnement"]);
    // On insère dans la base de données
	$query=$bdd->prepare("INSERT INTO `film` (`idfilm`, `titre`, `categorie`, `description`, `year`, `urlfilm`, `urlcover`, `abonnement`) VALUES (NULL,?,?,?,?,?,?,?)");
    $query->execute([$titre,$categorie,$description,$year,$urlfilm,$urlcover,$abonnement]);

		header("Location:catalog.php");

    }
?>