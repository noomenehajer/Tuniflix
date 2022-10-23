<?php

require_once 'config.php'; 

/*session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}*/
 
$mail=$_GET['mailuser'];
 $query=$bdd->prepare("SELECT mailuser FROM utilisateur WHERE mailuser=?");
 $query->execute([$mail]);
 $user =$query->fetchall();
 $check= count($user);
 
 if ($check==0){
    if(!isset($_GET)){
    header("Location:404.html");  
}
    if(empty($_GET["nom"])||empty($_GET["prenom"])||empty($_GET["mailuser"])||empty($_GET["password"])||empty($_GET["confirmPassword"])||empty($_GET["abonnement"])){
    header("Location:signup.php?error=One field or more is empty");
    
    }
        else if($_GET["password"]!=$_GET["confirmPassword"]){
            header("Location:signup.php?error=Password is not confirmed");
        }
            else{

                $nom=htmlspecialchars($_GET["nom"]);
                $prenom=htmlspecialchars($_GET["prenom"]);
                $mailuser=htmlspecialchars($_GET["mailuser"]);
                $password=md5(htmlspecialchars($_GET["password"]));
                $abonnement=htmlspecialchars($_GET["abonnement"]);
                $query=$bdd->prepare("INSERT INTO `utilisateur` (`iduser`, `nom`, `prenom`, `mailuser`, `password`, `abonnement`) VALUES (NULL,?,?,?,?,?)");
                $query->execute([$nom,$prenom,$mailuser,$password,$abonnement]);
                header("Location:signin.php");
 
            }
            header("Location:signin.php?error=You can sign in now");    
        }
        else{
            header("Location:signup.php?error=User already exist");
        }
?>