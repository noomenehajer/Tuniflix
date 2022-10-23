<?php
session_start();

session_destroy();
unset($_SESSION['usernom']);
unset($_SESSION['userprenom']);
unset($_SESSION['mailuser']);
unset($_SESSION['abonnement']);

header('Location: signin.php');
?>