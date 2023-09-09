<?php

session_start();


if(isset($_SESSION['user'][0]) and !empty($_SESSION['user'][0]) and 
isset($_SESSION['user'][1]) and !empty($_SESSION['user'][1]) and isset($_GET['donnee']) 
and !empty($_GET['donnee']) and $_GET['donnee'] == "deconnexion"){


$_SESSION = array();


exit();
}


if(isset($_SESSION['user'][0]) and !empty($_SESSION['user'][0]) and 
isset($_SESSION['user'][1]) and !empty($_SESSION['user'][1]) and isset($_GET['donnee']) 
and !empty($_GET['donnee']) and $_GET['donnee'] == "supprimeCompte"){

    require_once('./classes/Database.php');
   

    Database::query(" DELETE FROM `users` WHERE `id` = (:idUsers)", [":idUsers" => $_SESSION['user'][0]]);


}

?>
 