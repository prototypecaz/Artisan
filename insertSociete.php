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

} elseif(
isset($_SESSION['user'][0]) and !empty($_SESSION['user'][0]) and 
isset($_GET['nomVilleSociete']) and !empty($_GET['nomVilleSociete']) and
isset($_GET['nomSociete']) and !empty($_GET['nomSociete']) and
isset($_GET['nomMetier']) and !empty($_GET['nomMetier']) and
isset($_GET['telephoneArtisan']) and !empty($_GET['telephoneArtisan'])){
    $nomVille = intval($_GET['nomVilleSociete']);
    $nomMetier = intval($_GET['nomMetier']);
    require_once('./classes/Database.php');






    if(!empty($_FILES['myFileLogo']['error'])){


          
    
        if (
            isset($_FILES['myFileLogo']['error'][0]) and $_FILES['myFileLogo']['error'][0] === 0 
        ) {
            
            
            
        
           //////////////////////////////////////////////////////////////////////////
            // retourne un tableau multidimensionnelle
            // la premiere cle est egale a la valeur de l'attribut 'name' de l'input file
            // var_dump($_FILES);
            
            $imageLogo = (string) $_FILES['myFileLogo']['name'][0];
        
            // recupere l'extension de l'image
            $extensionLogo = (string) pathinfo($imageLogo)['extension'];
        
            // in_array('ceQueJeCherche', ['dansQuoi']);
            if (in_array($extensionLogo, $WHITE_LIST)) {
            
                // recupere le nom de l'image
                $nameLogo = (string) pathinfo($imageLogo)['filename'];
                
                // genere une chaine aleatoire alphanumerique
                $random = (string) bin2hex(random_bytes(32));
                
                
                // construction du nouveau nom de l'image
                $imageLogo = (string) "$nameLogo-$random.$extensionLogo";
                
                $logo = $imageLogo;
                
                /* 
                deplace le fichier temporaire dans un autre repertoire
                l'autre repertoire doit avoir des permissions www-data
                exemple : sudo chown -R www-data:www-data /var/www/html/uploads/
                et doit avoir obligatoirement un index.php
                exemple : /var/www/html/uploads/index.php
                */
        
                // move_uploaded_file('source', 'destination');
                move_uploaded_file($_FILES['myFileLogo']['tmp_name'][0], $UPLOADS . $logo);
                
            }
        
            else {
        
                echo "Extension non autorisee.";
        
            }
          
        ////////////////////////////////////////// Insert Article dans BDD////////////////////////////
           /* $connexionBdd->getData("UPDATE `general` SET `title` = (:UPLOADS_BDD)", [":UPLOADS_BDD"=>$UPLOADS_BDD.$image]); */
        
        }
        
        else {
        
           
            $logo="";
        
        }
        }



   

    if(!empty($_FILES['myFileSociete']['error'])){

        for($i = 0; $i < count($_FILES['myFileSociete']['error']); $i++){
           
            
    
        if (
            isset($_FILES['myFileSociete']['error'][$i]) and $_FILES['myFileSociete']['error'][$i] === 0 
        ) {
            
            
            
        
           //////////////////////////////////////////////////////////////////////////
            // retourne un tableau multidimensionnelle
            // la premiere cle est egale a la valeur de l'attribut 'name' de l'input file
            // var_dump($_FILES);
            
            $image = (string) $_FILES['myFileSociete']['name'][$i];
        
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
                move_uploaded_file($_FILES['myFileSociete']['tmp_name'][$i], $UPLOADS . $image);
                
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
    
    Database::query(
        'INSERT INTO `artisans` (`id`,`logo`, `telephone`,`email`, `siteWeb`, `description`, `nom_raison_sociale`, `date_creation_entreprise`,`instagram`,`pinterest`,`twitter`, `photoChantier`, `id_users`, `id_villes`,`id_metier`) VALUES (NULL,(:logo), (:telephone),(:email), (:siteWeb), (:description), (:nomSociete), (:dateCreation),(:insta),(:pinter),(:twitt),(:photoChantier), (:idUsers), (:idVille),(:idMetier))', 
        array(
            
            ':logo' => $logo,
            ':telephone' => $_GET['telephoneArtisan'],
            ':email' => $_GET['emailArtisan'],
            ':siteWeb' => $_GET['siteWebArtisan'],
            ':description' => $_GET['descriptionArtisan'],
            ':nomSociete' => $_GET['nomSociete'],
            ':dateCreation' =>$_GET['dateCreation'],
            ':insta'=>$_GET['instagram'],
            ':pinter'=>$_GET['pinterest'],
            ':twitt'=>$_GET['twitter'],
            ':photoChantier'=>implode(",", $tab),
            ':idUsers' => $_SESSION['user'][0],
            ':idVille' => $nomVille,
            ':idMetier' => $nomMetier
        )
    );

      echo "reussis";
}

?>