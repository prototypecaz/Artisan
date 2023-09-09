<?php

require_once('./classes/Database.php');

ini_set('post_max_size', '1M');
ini_set('upload_max_filesize', '1M');

$WHITE_LIST = (array) ['jpg', 'jpeg', 'gif', 'png', 'bmp'];
$UPLOADS = (string) '/var/www/html/artisan/assets/img/uploads/';
$UPLOADS_BDD = (string) '/uploads/';


if (
    
    isset($_FILES['myFileee']) and !empty($_FILES['myFileee'])
   
) {

   
  
    for($i = 0; $i < count($_FILES['myFileee']["error"]); $i++){
        //commandes
       
       
    
    if (
    
        isset($_FILES['myFileee']['error'][$i]) and $_FILES['myFileee']['error'][$i] === 0 
       
    ){
    
   //////////////////////////////////////////////////////////////////////////
    // retourne un tableau multidimensionnelle
    // la premiere cle est egale a la valeur de l'attribut 'name' de l'input file
    // var_dump($_FILES);
    
    $image = (string) $_FILES['myFileee']['name'][$i];

    
	// recupere l'extension de l'image
    $extension = (string) pathinfo($image)['extension'];

    // in_array('ceQueJeCherche', ['dansQuoi']);
    if (in_array($extension, $WHITE_LIST)) {
        
	    // recupere le nom de l'image
        $name = (string) pathinfo($image)['filename'];
       

        if(strlen($name) < 50 ){
	    // genere une chaine aleatoire alphanumerique
	    $random = (string) bin2hex(random_bytes(32));}
        else{
            $random= "";
        }
        
        // construction du nouveau nom de l'image
        $image = (string) "$name$random.$extension";
        
        $tab[] = $UPLOADS_BDD.$image;
        
        /* 
        deplace le fichier temporaire dans un autre repertoire
        l'autre repertoire doit avoir des permissions www-data
        exemple : sudo chown -R www-data:www-data /var/www/html/uploads/
        et doit avoir obligatoirement un index.php
        exemple : /var/www/html/uploads/index.php
        */

        // move_uploaded_file('source', 'destination');
        move_uploaded_file($_FILES['myFileee']['tmp_name'][$i], $UPLOADS . $image);
        
    }

    else {

        echo "Extension non autorisee.";

    }

  
    Database::query("UPDATE `artisans` SET `photoChantier` = (:image) WHERE `artisans`.`id` = (:chooseImage)",
    [
    ':image'=>implode(",", $tab),
    ':chooseImage'=>$_GET['modificationSocieteId']
    ]);
   
  echo "reussis";
}
    }
}

elseif (isset($_POST['tableauVide']) and !empty($_POST['tableauVide']) and $_POST['tableauVide'] == "tableauVide"){

    $tab = [];

    Database::query("UPDATE `artisans` SET `photoChantier` = (:image) WHERE `artisans`.`id` = (:chooseImage)",
    [
    ':image'=>implode(",", $tab),
    ':chooseImage'=>$_GET['modificationSocieteId']
    ]);
   
  echo "reussis";

}else{
   // Echec du téléchargement
}




if(
    isset($_GET['modificationSocieteId']) && !empty($_GET['modificationSocieteId']) && 
    isset($_GET['modificationDateDeCreation']) && !empty($_GET['modificationDateDeCreation'])){
        require_once('./classes/Database.php');
    
        Database::query(
            "UPDATE `artisans` SET `date_creation_entreprise` = (:modifDateCreation) WHERE `artisans`.`id` = (:idEntreprise)", 
            [':modifDateCreation' => $_GET['modificationDateDeCreation'],
            ':idEntreprise' => $_GET['modificationSocieteId']]
        );
    
    }

if(
isset($_GET['modificationSocieteId']) && !empty($_GET['modificationSocieteId']) && 
isset($_GET['modificationMetierId']) && !empty($_GET['modificationMetierId'])){
    require_once('./classes/Database.php');

    Database::query(
        "UPDATE `artisans` SET `id_metier` = (:modifMetierId) WHERE `artisans`.`id` = (:idEntreprise)", 
        [':modifMetierId' => $_GET['modificationMetierId'],
        ':idEntreprise' => $_GET['modificationSocieteId']]
    );
    
}

if(isset($_GET['modificationSiteWeb']) || 
isset($_GET['modificationInstagram'])  || 
isset($_GET['modificationPinterest'])  || 
isset($_GET['modificationTwitter'])  ){

   
    Database::query(
        "UPDATE `artisans` SET `siteWeb` = (:modifSiteWeb), `instagram` = (:modifInstagram), `pinterest` = (:modifPinterest), `twitter` = (:modifTwitter) WHERE `artisans`.`id` = (:idEntreprise)", 
        [':modifSiteWeb' => $_GET['modificationSiteWeb'],
        ':modifInstagram' => $_GET['modificationInstagram'],
        ':modifPinterest' => $_GET['modificationPinterest'],
        ':modifTwitter' => $_GET['modificationTwitter'],
        ':idEntreprise' => $_GET['modificationSocieteId']]
    );

    echo "reussis";
}



if(isset($_GET['modificationTitreSociete']) && !empty($_GET['modificationTitreSociete']) &&
isset($_GET['modificationSocieteId']) && !empty($_GET['modificationSocieteId'])){
    require_once('./classes/Database.php');

    Database::query(
        "UPDATE `artisans` SET `nom_raison_sociale` = (:modifNomRaisonSociale) WHERE `artisans`.`id` = (:idEntreprise)", 
        [':modifNomRaisonSociale' => $_GET['modificationTitreSociete'],
        ':idEntreprise' => $_GET['modificationSocieteId']]
    );

    
 
}

if(isset($_POST['inputModifDescription']) && !empty($_POST['inputModifDescription']) &&
isset($_POST['idEntreprise']) && !empty($_POST['idEntreprise'])){
    require_once('./classes/Database.php');

    Database::query(
        "UPDATE `artisans` SET `description` = (:modifDescription) WHERE `artisans`.`id` = (:idEntreprise)", 
        [':modifDescription' => $_POST['inputModifDescription'],
        ':idEntreprise' => $_POST['idEntreprise']]
    );
    http_response_code(302);
    // ajoute dans l'en-tete la destination
    header('Location: ./?entrepriseUnique=undefined&etablissement='.$_POST['idEntreprise']);
    // arrete l'execution du PHP
    exit();
}




if (
    
    isset($_FILES['myFileChangeLogo']['error']) and $_FILES['myFileChangeLogo']['error'] === 0 
   
) {
  
    
   //////////////////////////////////////////////////////////////////////////
    // retourne un tableau multidimensionnelle
    // la premiere cle est egale a la valeur de l'attribut 'name' de l'input file
    // var_dump($_FILES);
    
    $image = (string) $_FILES['myFileChangeLogo']['name'];

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
        
        /* 
        deplace le fichier temporaire dans un autre repertoire
        l'autre repertoire doit avoir des permissions www-data
        exemple : sudo chown -R www-data:www-data /var/www/html/uploads/
        et doit avoir obligatoirement un index.php
        exemple : /var/www/html/uploads/index.php
        */

        // move_uploaded_file('source', 'destination');
        move_uploaded_file($_FILES['myFileChangeLogo']['tmp_name'], $UPLOADS . $image);
        
    }

    else {

        echo "Extension non autorisee.";

    }

  
    Database::query("UPDATE `artisans` SET `logo` = (:image) WHERE `artisans`.`id` = (:chooseImage)",
    [
    ':image'=>$image,
    ':chooseImage'=>$_GET['modificationSocieteId']
    ]);
   
  echo ("reussis");
}

else {

    

}

 // retourne au navigateur le code HTTP pour preparer une redirection





?>