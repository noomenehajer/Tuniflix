<?php 

/***********************CONFIG**************************/
include 'config.php';
session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}
  /******************ADMIN***************************/
        $query= $bdd ->query('select * from admin ');
        $admins= $query ->fetchall();
        $nb_admin=count($admins);
               /******************END_ADMIN***************************/
               
        /******************USER***************************/
        $query= $bdd ->query('select * from utilisateur ');
        $users= $query ->fetchall();
        $nb_useres=count($users);
        
        $query= $bdd ->query('select * from utilisateur where abonnement="premium"');
        $revenus= $query->fetchall();
        $revenu=count($revenus);
               /******************END_USER***************************/
        
               /******************MOVIE***************************/
        $query= $bdd ->query('select * from film');
        $movies= $query ->fetchall();
        $nb_movies=count($movies);
               /******************END_MOVIE***************************/
$template ='index';
include "layout.phtml";?>