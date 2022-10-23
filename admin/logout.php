<?php
session_start();

session_destroy();
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['mail']);
unset($_SESSION['role']);

header('Location: signin.php');
?>