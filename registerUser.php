<?php



ini_set('display_errors', 1);

session_start();


if (
    isset($_GET['email']) and !empty($_GET['email']) and strlen($_GET['email']) <= 320
){
    require_once('./classes/Sanitizing.php');
    
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();

    // Validation de l'adresse e-mail
    $email = (string) ($sanitizing->validateEmail($_GET['email'])) ? strtolower($_GET['email']) : die('is not a valid email');
    require_once('./classes/Database.php');
    $verifEmail = Database::query(
        'SELECT `email`,`activate` FROM `users` WHERE `email` = (:email) ', 
        array(
            ':email' => $email
        )
    );

 
       
      
       
          
     if (isset($verifEmail) and !empty($verifEmail) and $verifEmail[0]['activate'] == 1){
        echo "compteExistant";
    }
    
    elseif(isset($verifEmail) and !empty($verifEmail) and $verifEmail[0]['activate'] == 0){
       // Definition des donnees du sujet
       
   
       // retourne au navigateur le code HTTP pour preparer une redirection
       echo "compteExistantNonActiver";
       
       $_SESSION["mail"] = array($email);
        /* echo ("Cette email existe mais n'est pas activé"); */
    }
    elseif (
   

        isset($_GET['email']) and !empty($_GET['email']) and strlen($_GET['email']) <= 320 and
    
        isset($_SESSION['password']) and !empty($_SESSION['password']) and
    
        isset($_GET['password']) and !empty($_GET['password']) and

        isset($_GET['nomUser']) and !empty($_GET['nomUser']) and 

        isset($_GET['prenomUser']) and !empty($_GET['prenomUser']) and
    
        $_SESSION['password'] === $_GET['password']
    ) {
    
        require_once('./classes/Sanitizing.php');
        // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
        $sanitizing = (object) new Sanitizing();
    
        // Validation de l'adresse e-mail
        $email = (string) ($sanitizing->validateEmail($_GET['email'])) ? strtolower($_GET['email']) : die('is not a valid email');
     
        require_once('./classes/Encryption.php');
        // Instanciation de la classe Encryption et creation de l'objet $encryption
        $encryption = (object) new Encryption();
    
        // Chiffrement du mot de passe
        $password = (string) $encryption->passwordHash($_GET['password']);
    
        require_once('./classes/Database.php');
        
     
            Database::query(
                'INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`, `activate`) VALUES (NULL, (:nom), (:prenom), (:email), (:password), 0)', 
                array(
                    ':nom' => $_GET['nomUser'],
                    ':prenom' => $_GET['prenomUser'],
                    ':email' => $email,
                    ':password' => $password
                )
            );
        //}
        // Appel de la classe abstraite Database et insertion des donnees dans la table "users"
       
        
    
        echo "confirmeInscription";
        $_SESSION["mail"] = array($email);
    }
    
    

}

?>
