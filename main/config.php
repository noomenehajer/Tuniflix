<?php 
    
    try 
    {      /******************CONNECT***************************/
        $bdd = new PDO("mysql:host=localhost;dbname=tunflix;charset=utf8", "root", "");
           
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
