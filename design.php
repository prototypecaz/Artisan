<?php

session_start();

if(isset($_GET['radio']) && !empty($_GET['radio'])){

    require_once('./classes/Database.php');
  
    Database::query("UPDATE `users` SET `id_design` = (:valueRadio) WHERE `id` = (:idUsers)", 
    [":valueRadio" => $_GET['radio'],
     ":idUsers" => $_SESSION['user'][0]]);

    $design = Database::query("SELECT * FROM `design` WHERE `id` = (:radio)", [":radio" => $_GET['radio']]);

    echo json_encode($design);

}


?>