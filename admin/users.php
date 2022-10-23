	<?php 
	
	/***********************CONFIG****************************************/ 
	require_once 'config.php'; 
	session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}
	
	$query= $bdd ->query('select * from utilisateur ');
        $users= $query ->fetchall();
        $nb_useres=count($users);
		$template ='users';
		include "layout.phtml";
							?>