<?php


    require_once('./classes/Database.php');
   
   

  


    if(isset($_GET['idAvisEntreprise']) and !empty($_GET['idAvisEntreprise'])){

        $test2 = Database::query("SELECT * FROM `avis` WHERE `idEntreprise` = (:idAvis)",[':idAvis' => $_GET['idAvisEntreprise']]);

echo json_encode($test2);
    }else{

    $test = Database::query("SELECT * FROM `avis`",[]);

   
    echo json_encode($test);
 
    }
 
    
  
    

   



?>