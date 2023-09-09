<?php

ini_set('display_errors', 1);

require_once('./vendor/autoload.php');

# Defini l'emplacement des fichiers de templates
$fileSystemLoader = (object) new \Twig\Loader\FilesystemLoader('./themes/classic/templates/front-office/');

# Defini les parametres du chargeur
$optionsLoader = (array) array(
    'debug' => true,    // active le mode debug
    'autoescape' => false, // desactive l'echappement automatique
    'auto_reload' => true, // compilation systematique des templates
    'cache' => './cache/' // definition de l'emplacement du dossier de cache
);

// Chargement de l'environnement avec la definitions des parametres
$environment = (object) new \Twig\Environment($fileSystemLoader, $optionsLoader);
// Finalise la possibilite d'utiliser la commande "debug"
$environment->addExtension(new \Twig\Extension\DebugExtension());

require_once('./classes/Database.php');

session_start();

           
$general = (array) array(
    'page' => $_SERVER['QUERY_STRING'],
    'metiers' => Database::query("SELECT * FROM `metier`", array())
   );



   if(isset($_SESSION['user'][0]) and !empty($_SESSION['user'][0]) and 
   isset($_SESSION['user'][1]) and !empty($_SESSION['user'][1]) ){

      $design = Database::query("SELECT `id_design` FROM `users` WHERE `id` = (:utilisateurCo)", [
               ':utilisateurCo' => $_SESSION['user'][0]
]);
        

$affichageDesign = (array) array(
    'affichageDesign' => Database::query("SELECT * FROM `design` WHERE `id` = (:idDesign)", [':idDesign'=>$design[0]['id_design']])
);


          }else{
            $affichageDesign = (array) array(
                'affichageDesign' => array(['background' => './assets/img/pexels.jpg'])
            );
          }



$recherche = [];
$utilisateurCo = [];
$rechercheEntreprise = [];

if(isset($_GET["ville"]) and !empty($_GET["ville"]) and 
isset($_GET["metier"]) and !empty($_GET["metier"])){

   
   

    $rechercheEntreprise = (array) array(
    
    
    'rechercheEntreprise' => Database::query(" SELECT `id`,`logo`,`telephone`,`email`,`siteWeb`,`description`,`nom_raison_sociale`,`date_creation_entreprise`,`ville_nom`, DATE_FORMAT(date_creation_entreprise, '%d/%m/%Y') as 'dateSociete' FROM `artisans`,`villes_france_free` WHERE id_villes = (:idVilles) and id_metier = (:idMetier) and ville_id = (:idVille)",
    [
        ':idVille' => $_GET['ville'],
        ':idVilles'=>$_GET['ville'],
        'idMetier'=>$_GET["metier"]
    ]));
    
   
   
    
}
elseif(
    
    isset($_GET['long']) and !empty($_GET['long']) and
    isset($_GET['lat']) and !empty($_GET['lat']) and 
    isset($_GET['radius']) and !empty($_GET['radius']) and
    isset($_GET["metier"]) and !empty($_GET["metier"])){
        $tableauArtisans = [];
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
    $artisans = Database::query("SELECT `id`,`logo`,`telephone`,`email`,`siteWeb`,`description`,`nom_raison_sociale`,`date_creation_entreprise`,`ville_nom`, DATE_FORMAT(date_creation_entreprise, '%d/%m/%Y') as 'dateSociete' FROM `artisans`,`villes_france_free` WHERE id_metier = (:idMetier) AND ville_id = (:idVille)  AND `id_villes` IN (".$ville['ville_id'].")",
    [
        ':idVille'=>$ville['ville_id'],
        ':idMetier'=>$_GET["metier"]
    ]);

    if(isset($artisans) and !empty($artisans)){
   $tableauArtisans[] = $artisans;
  
   
  
}


      
}


        }

     
     
        $rechercheEntreprise = (array) array(
            'rechercheEntreprise' => $tableauArtisans
           );  
    }
if(isset($_GET['etablissement'])and !empty($_GET['etablissement'])){
    /*$url = "https://entreprise.data.gouv.fr/api/sirene/v3/etablissements/?siret=".$_GET['entrepriseUnique'];
    $raw = file_get_contents($url);
    $json = json_decode($raw,true);*/
    
    $entreprise = (array) array(
        'entreprise' => /*$json["etablissements"]*/ Database::query("SELECT *, DATE_FORMAT(date_creation_entreprise, '%d/%m/%Y') as 'dateSociete' FROM `artisans` WHERE id = (:etablissement)", [':etablissement'=>$_GET['etablissement']]),
        'notes' => Database::query("SELECT * FROM `avisUnique`  WHERE `idEntreprise` = (:etablissement) ORDER BY `id` DESC", [':etablissement'=>$_GET['etablissement']]),
        'moyennes' => Database::query("SELECT `avis`,`nombreDePersonne` FROM `avis`  WHERE `idEntreprise` = (:etablissement)", [':etablissement'=>$_GET['etablissement']]),
       
    );
    $metier = (array) array(
        'metier' => Database::query("SELECT `metier` FROM `metier` WHERE `id` = (:metierEntreprise)", [':metierEntreprise'=>$entreprise['entreprise'][0]['id_metier']])
    );

    
   
    if(!empty($entreprise['moyennes'][0]['avis'])){
   
    $moyenne = (array) array(
        'moyenne' => [round(floatval($entreprise['moyennes'][0]['avis']/$entreprise['moyennes'][0]['nombreDePersonne']), 1, PHP_ROUND_HALF_DOWN),$entreprise['moyennes'][0]['nombreDePersonne']]
    );}else{
        $moyenne = [];
    }
    
   

    
    $date = (array) array();

    foreach ($entreprise['notes'] as $value){
        
        $strStart = $value['date'];
        $strEnd   = date("Y-m-d H:i:s"); 
        $dteStart = new DateTime($strStart);
        $dteEnd   = new DateTime($strEnd); 
        $dteDiff  = $dteStart->diff($dteEnd); 
        $jour = $dteDiff->format("%d");
        $mois = $dteDiff->format("%m");
        $annee = $dteDiff->format("%Y");
        $heure = $dteDiff->format("%H");
        $minutes = $dteDiff->format("%I");

            switch (true) {

            case ($annee > 0):
            $difference = $annee."ans";
            break;
            case ($mois > 0):
            $difference = $mois."mois";
            break;
            case ($jour > 0):
            $difference = $jour."j";
            break;
            case ($heure > 0):
            $difference = $heure."h";
            break;
            default:
            $difference = $minutes."mn";
          }
       

   
   array_push($date, array('hoursOrMin' => $difference));

   if(isset($_SESSION['user'][0]) and !empty($_SESSION['user'][0]) and 
   isset($_SESSION['user'][1]) and !empty($_SESSION['user'][1]) ){
        
      $utilisateurCo = (array) array(
          'utilisateurConnecter' => $_SESSION['user'][0]
      );
   }else{
       $utilisateurCo = [];
   }
 
} 
      
}else{
    $entreprise = [];
    $metier = [];
    $date = [];
    $moyenne = [];
    
}

for($i = 0; $i < count($date); $i++){

    array_push($entreprise['notes'][$i], $date[$i]);}

  
    if(isset($_SESSION['user'][0]) and !empty($_SESSION['user'][0]) and 
    isset($_SESSION['user'][1]) and !empty($_SESSION['user'][1]) ){
 
       $utilisateurCo = (array) array(
           'utilisateurConnecter' => Database::query("SELECT * FROM `users` WHERE `id` = (:utilisateurCo)", [
                ':utilisateurCo' => $_SESSION['user'][0]
           ])
       );

       $societeUsers = (array) array(
        'societeUsers' => Database::query("SELECT `id`, `nom_raison_sociale` FROM `artisans` WHERE `id_users` = (:utilisateurCo)", [
             ':utilisateurCo' => $_SESSION['user'][0]
        ])
    );
    }else{
        $utilisateurCo = [];
        $societeUsers = [];
    }

$twig = (object) $environment->load('index.master.html.twig');
echo $twig->render(
    array_merge(
       
        $rechercheEntreprise,
        $general,
        $affichageDesign,
        $recherche,
        $entreprise,
        $metier,
        $moyenne,
        $utilisateurCo,
        $societeUsers

 
        

    )
);

?>