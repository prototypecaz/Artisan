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

    if (isset($verifEmail) and !empty($verifEmail)){
        // retourne au navigateur le code HTTP pour preparer une redirection
       http_response_code(302);
       // ajoute dans l'en-tete la destination
       header('Location: ./?connexion#already-existe');
       // arrete l'execution du PHP
       exit(); 
       
           /*  echo ('cette email existe deja '); */
    } 
       
       
        /* echo ("Cette email existe mais n'est pas activé"); */
    elseif (
   

        isset($_GET['email']) and !empty($_GET['email']) and strlen($_GET['email']) <= 320 and
    
        isset($_SESSION['password']) and !empty($_SESSION['password']) and
    
        isset($_GET['password']) and !empty($_GET['password']) and
    
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
        // Appel de la classe abstraite Database et insertion des donnees dans la table "users"
        Database::query(
            'INSERT INTO `users` (`id`, `email`, `password`, `activate`) VALUES (NULL, (:email), (:password), 0)', 
            array(
                ':email' => $email,
                ':password' => $password
            )
        );
        
        $data =  Database::query('SELECT * FROM `users` WHERE `email` = (:email)',[':email' => $_GET['email']]);
        $idFromDatabase = (string) $data[0]['id'];
        $_SESSION['user'] = (array) array($idFromDatabase, session_id());
        echo "#reussis";
        // Definition des donnees du sujet
       
        
    }
    
    

}

?>
