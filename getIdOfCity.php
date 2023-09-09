<?php


if(isset($_GET['recherche']) and !empty($_GET['recherche']) ){

    

    require_once('./configuration2.php');
    // Permet de recuperer le tableau associatif du fichier configuration.php pour la connexion a la bdd.
    
    
    // Lancement de notre exception.
    
    try {// On teste la connexion a la base de donnee avec une class PDO qui nous permet une meilleur sécurité.
        $connexion = (object) new PDO( sprintf("mysql:host=%s;dbname=%s", $database['host'], $database['dbname']), $database['username'], $database['password'] );
    } catch (PDOException $exception) { // Attrape une erreur grace a la PDOException 
        var_dump($exception->getMessage()); // Affiche l'erreur si la PDOexception envoie une erreur
    } finally {
        
        $preparation = (object) $connexion->prepare("SELECT `ville_id`, `ville_nom`,`ville_longitude_deg`,`ville_latitude_deg`,`ville_code_postal`
        FROM `villes_france_free`
        WHERE `ville_nom` LIKE ? LIMIT 5 "); // Notre requete sql (a voir dans fichier getcategorie.php et getarticles.php)
            
        if ($preparation->execute([ $_GET['recherche']. "%"])) { // Si la connexion c'est bien passer alors execute ce qui y'a dans l'instruction(if)
            if ($preparation->rowCount() > 0) { // Compte le nombre de ligne (si superieur a 0 alors go dans l'instruction)

                $test =  $preparation->fetchAll(PDO::FETCH_ASSOC); //Renvoie un tableau associatif en fonction de la requete sql choisis
                // Renvoie un tableau associatif compris par le javascript 
              
                echo json_encode($test);
                
               
                /* Notre but dans cette fonction est de renvoyer la variable $test(tableau associatif en fonction de la requete) a nos fichier javascript (getcategorie et getarticle)
                ceux qui nous permettra de pouvoir afficher dans l'index.html dynamiquement nos article en fonction de la catégorie choisis

         
            // ----------------> Direction 3eme etape getCategories.php*/
             }
        }
    }

    

   



}else{
    $test = [];
    echo json_encode($test);
}