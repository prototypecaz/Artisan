<?php

session_start();

ini_set("display_errors", 1);

ini_set('post_max_size', '1M');
ini_set('upload_max_filesize', '1M');

$WHITE_LIST = (array) ['jpg', 'jpeg', 'gif', 'png', 'bmp'];
$UPLOADS = (string) '/var/www/html/artisan/assets/img/uploads/';
$UPLOADS_BDD = (string) '/uploads/';


if(!isset($_SESSION['user'][0]) and empty($_SESSION['user'][0]) and 
    !isset($_SESSION['user'][1]) and empty($_SESSION['user'][1]) ){

    echo "#connection";

}

else if(isset($_GET['idEntreprise']) and !empty($_GET['idEntreprise']) and isset($_GET['titre']) and !empty($_GET['titre']) and
isset($_GET['commentaire']) and !empty($_GET['commentaire']) and
isset($_GET['valeur']) and !empty($_GET['valeur']) and isset($_SESSION['user'][0]) and !empty($_SESSION['user'][0]) and 
isset($_SESSION['user'][1]) and !empty($_SESSION['user'][1]) and
isset($_COOKIE['PHPSESSID']) and !empty($_COOKIE['PHPSESSID']) and $_SESSION['user'][1] === $_COOKIE['PHPSESSID']){
    require_once('./classes/Database.php');
    
    if(!empty($_FILES['myFile']['error'])){

    for($i = 0; $i < count($_FILES['myFile']['error']); $i++){
       
      

    if (
        isset($_FILES['myFile']['error'][$i]) and $_FILES['myFile']['error'][$i] === 0 
    ) {
        
        
        
    
       //////////////////////////////////////////////////////////////////////////
        // retourne un tableau multidimensionnelle
        // la premiere cle est egale a la valeur de l'attribut 'name' de l'input file
        // var_dump($_FILES);
        
        $image = (string) $_FILES['myFile']['name'][$i];
    
        // recupere l'extension de l'image
        $extension = (string) pathinfo($image)['extension'];
    
        // in_array('ceQueJeCherche', ['dansQuoi']);
        if (in_array($extension, $WHITE_LIST)) {
        
            // recupere le nom de l'image
            $name = (string) pathinfo($image)['filename'];
            
            // genere une chaine aleatoire alphanumerique
            $random = (string) bin2hex(random_bytes(32));
            
            
            // construction du nouveau nom de l'image
            $image = (string) "$name-$random.$extension";
            
            $tab[] = $UPLOADS_BDD.$image;
            
            /* 
            deplace le fichier temporaire dans un autre repertoire
            l'autre repertoire doit avoir des permissions www-data
            exemple : sudo chown -R www-data:www-data /var/www/html/uploads/
            et doit avoir obligatoirement un index.php
            exemple : /var/www/html/uploads/index.php
            */
    
            // move_uploaded_file('source', 'destination');
            move_uploaded_file($_FILES['myFile']['tmp_name'][$i], $UPLOADS . $image);
        }
    
        else {
    
            echo "Extension non autorisee.";
    
        }
      
    ////////////////////////////////////////// Insert Article dans BDD////////////////////////////
       /* $connexionBdd->getData("UPDATE `general` SET `title` = (:UPLOADS_BDD)", [":UPLOADS_BDD"=>$UPLOADS_BDD.$image]); */
    
    }
    
    else {
    
       echo "Echec du telechargement.";
        $UPLOADS_BDD="";
        $image="";
    
    }
    }}else{
        $tab = [];
    }




    $idEntreprise = $_GET['idEntreprise'];
    

    
   
    Database::query('INSERT INTO `avisUnique`(`id`, `idEntreprise`,`avis`,`titre`,`commentaire`,`photo`,`date`,`id_users`) VALUES (null,(:idEntreprise),(:avis),(:titre), (:commentaire),(:photo),(:date),(:id_users) )',[
        ':idEntreprise'=>$idEntreprise,
        ':avis'=>$_GET['valeur'],
        ':titre'=>$_GET['titre'],
        ':commentaire'=>$_GET['commentaire'],
        ':photo'=>implode(",", $tab),
        ':date' => date("Y-m-d H:i:s"),
        ':id_users' => $_SESSION['user'][0] ]);

       

    $teste = Database::query("SELECT `avis` FROM `avis` WHERE `idEntreprise` = $idEntreprise",[]);
    
        
   if(empty($teste)){
   Database::query('INSERT INTO `avis`(`id`, `idEntreprise`,`avis`,`nombreDePersonne`) VALUES (null,(:idEntreprise),(:avis), 1 )',[':idEntreprise'=>$idEntreprise,':avis'=>$_GET['valeur']]);
   


   }else{
       Database::query("UPDATE `avis` SET `avis` = `avis` + (:backgroundImg),`nombreDePersonne` = `nombreDePersonne` + 1 WHERE `idEntreprise` = $idEntreprise",
   [
   ':backgroundImg'=>$_GET['valeur']
   ]);

  

  


    /*Database::query('INSERT INTO `avis`(`id`, `idEntreprise`,`avis`) VALUES (null,(:idEntreprise),(:avis))',[':idEntreprise'=>$idEntreprise,':avis'=>$_POST['valeur']]);

    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing*/
    
    
  
  
   }

   
}else{
    

    if(isset($_GET['commentaire']) and empty($_GET['commentaire'])){
        echo "commentaire";
    }
    if(isset($_GET['titre']) and empty($_GET['titre'])){
        echo "titre";
    }
    if(isset($_GET['valeur']) and empty($_GET['valeur'])){
        echo "valeur";
    }


}



    
    

  
   





?>