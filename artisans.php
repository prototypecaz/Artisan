<?php

ini_set("display_errors", 1);

$tableauArtisans = [];

if(isset($_GET["ville"]) and !empty($_GET["ville"]) and 
isset($_GET["metier"]) and !empty($_GET["metier"])){

    require_once('./classes/Database.php');
   
   

    $test = Database::query(" SELECT `id`,`logo`,`telephone`,`email`,`siteWeb`,`description`,`nom_raison_sociale`,`date_creation_entreprise`,`ville_nom`, DATE_FORMAT(date_creation_entreprise, '%d/%m/%Y') as 'dateSociete' FROM `artisans`,`villes_france_free` WHERE id_villes = (:idVilles) and id_metier = (:idMetier) and ville_id = (:idVille)",
    [
        ':idVille' => $_GET['ville'],
        ':idVilles'=>$_GET['ville'],
        'idMetier'=>$_GET["metier"]
    ]);
    
   
    echo json_encode($test);
    
}
elseif(
    
    isset($_GET['long']) and !empty($_GET['long']) and
    isset($_GET['lat']) and !empty($_GET['lat']) and 
    isset($_GET['radius']) and !empty($_GET['radius']) and
    isset($_GET["metier"]) and !empty($_GET["metier"])){

        require_once('./classes/Database.php');
        
        $test = Database::query("SELECT `ville_id`, `ville_nom`,`ville_longitude_deg`,`ville_latitude_deg`
        FROM `villes_france_free` ", array());

       foreach($test as $ville){

        $theta = $_GET['long'] - $ville['ville_longitude_deg'];
        $dist = sin(deg2rad($_GET['lat'])) * sin(deg2rad($ville['ville_latitude_deg'])) +  cos(deg2rad($_GET['lat'])) * cos(deg2rad($ville['ville_latitude_deg'])) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        
        if($miles <= $_GET['radius']) {
           
            
       /* $artisans = Database::query("SELECT *
        FROM `artisans` WHERE `metier_id` = (:metier) AND `villes_id` IN (".$ville['ville_id'].")  ", ['metier' => $_GET['metier']]);*/
        $artisans = Database::query("SELECT *, DATE_FORMAT(date_creation_entreprise, '%d/%m/%Y') as 'dateSociete'FROM `artisans` WHERE id_metier = (:idMetier) AND `id_villes` IN (".$ville['ville_id'].")",
        [
            'idMetier'=>$_GET["metier"]
        ]);

        if(isset($artisans) and !empty($artisans)){
       $tableauArtisans = $artisans;}
          
           

          
      


                }

        
            }

            
                echo json_encode($tableauArtisans);
        }
        
     


?>



