<?php


if(isset($_GET['deleteCommentaire']) and !empty($_GET['deleteCommentaire']) and 
isset($_GET['modificationAvis']) and !empty($_GET['modificationAvis']) and isset($_GET['deleteIdEntreprise']) and
!empty($_GET['deleteIdEntreprise'])){
    require_once('./classes/Database.php');
   $delete = Database::query("DELETE FROM `avisUnique` WHERE `avisUnique`.`id` = (:delete_Article); UPDATE `avis` SET `avis` = `avis` - (:modification), `nombreDePersonne` = `nombreDePersonne` - 1 WHERE `idEntreprise` = (:idEntreprise)",[':delete_Article' => $_GET['deleteCommentaire'],':modification' => $_GET['modificationAvis'],':idEntreprise' => $_GET['deleteIdEntreprise']]);

  
   echo "suppressionReussis";
}


?>