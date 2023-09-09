<?php

if(isset($_GET['emailUser']) and !empty($_GET['emailUser']) and strlen($_GET['emailUser']) <= 320 
and isset($_GET['passwordUser']) and !empty($_GET['passwordUser']) and strlen($_GET['passwordUser']) >= 5)
{   
    require_once('./classes/Sanitizing.php');
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();
    // Validation de l'adresse e-mail
   
    $email = (string) ($sanitizing->validateEmail($_GET['emailUser'])) ? strtolower($_GET['emailUser']) : die('is not a valid email');
    require_once('./classes/Database.php');

   $data =  Database::query('SELECT * FROM `users` WHERE `email` = (:email)',[':email' => $_GET['emailUser']]);
  
   if(isset($data) and !empty($data)){
$activate = $data[0]['activate'];  
$test= true; 
   }
       
     if(empty($data)){
       
      echo "emailInvalide";
    }else{

        $passwordBDD = $data[0]['password'];
            $password = $_GET['passwordUser'];
            $idFromDatabase = (string) $data[0]['id'];
            
           
            if(password_verify($password,$passwordBDD)){
                session_start();
                
                if($test){

                    if($activate == 1){
                
            // Stockage du nom d'utilisateur (idfromdatabase) et de la valeur aleatoire du cookie(session_id) dans une super variable globale
            $_SESSION['user'] = (array) array($idFromDatabase, session_id());
                
            // retourne au navigateur le code HTTP pour preparer une redirection
            echo "#reussis";
                    }
                    else{

                        echo "nonActiver";
            
                        $_SESSION["mail"] = array($email);
                    
                       
                        
                        // Definition des donnees du sujet
                       /* $subject = (string) "Nouvelle demande d'activation de votre compte";
                        
                        require('./configuration2.php');
                        // Definition du nom de domaine
                        
                        $domain = (string) $general['domain'];
                    
                        // Encodage en Base64 de l'adresse e-mail
                        $encode = (string) base64_encode($email);
                        
                        // Definition des donnees du corps
                        $body = <<<EOF
                            <img src="http://$domain/assets/img/logo.png" title="Logo de $domain" alt="Logo de $domain"/>
                            <p>Veuillez suivre le lien suivant pour la confirmation :</p>
                            <a href="http://$domain/artisan/?connexion#$encode">Confirmez votre compte</a>
                        EOF;
                    
                        require_once('./classes/Mailer.php');
                        
                        // Instanciation de la classe Mailer et creation de l'objet $mailer
                        $mailer = (object) new Mailer();
                        // Appel de methode "sendEmail(arguments)" pour definir les donnees et envoyer
                        $mailer->sendEMail($email, $subject, $body); */
                       
                        
                        
                       
                    }

                

                
                }else{
                    // Attribue un identifiant unique de type cookie a un navigateur
                 
                 // Stockage du nom d'utilisateur (idfromdatabase) et de la valeur aleatoire du cookie(session_id) dans une super variable globale
                echo "test";
                 $_SESSION['admin'] = (string) session_id();
                 // retourne au navigateur le code HTTP pour preparer une redirection
                 http_response_code(302);
                 // ajoute dans l'en-tete la destination
                 header('Location: ./');
                 // arrete l'execution du PHP
                 exit();
                }
            }
            else{
    
            
           echo "passwordInvalide";
            
            
            }
            
    
        
    }

  
   
}
   
   
   


?>