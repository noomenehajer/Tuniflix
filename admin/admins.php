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
		$template ='admins';
include "layout.phtml";

 ?>