<?php 

/***********************CONFIG**************************/
include 'config.php';

session_start();
if (!isset($_SESSION['mail'])){	
header('Location:signin.php');
exit();
}
if(empty($_GET)){
header('Location:index.php');
}
else{
	
	if(($_GET['edit']==0) && (!empty($_GET['id']))){
		
		header('Location:addMovie.php?id='.$_GET['id'].'&method=update');
	}
	else if ($_GET['edit']==1){
				
				header('Location:addUser.php?id='.$_GET['id'].'&method=update');

	}
		else if($_GET['edit']==2){
					
					header('Location:addAdmin.php?id='.$_GET['id'].'&method=update');

		}
			else{
				
				header('Location:index.php');
			}
}


?>