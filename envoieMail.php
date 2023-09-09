<?php

session_start();

if(isset($_SESSION['mail'][0]) and !empty($_SESSION['mail'][0])){

   
    
    $subject = (string) "Nouvelle demande d'activation de votre compte";
                        
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
                        $mailer->sendEMail($_SESSION['mail'][0], $subject, $body);
}


if(isset($_GET['objetMail']) and !empty($_GET['objetMail']) and 
isset($_GET['messageMail']) and !empty($_GET['messageMail'])){

    echo "reussis";
    $email = "heycasimir82@hotmail.fr";
     // Definition des donnees du sujet
     $subject = (string) $_POST['objetMail'];

     $message = $_POST['messageMail'];
            
     require('./configuration2.php');
     // Definition du nom de domaine
     $domain = (string) $general['domain'];
 
     // Encodage en Base64 de l'adresse e-mail
     $encode = (string) base64_encode($email);
 
     // Definition des donnees du corps
     $body = <<<EOF
        <p>$message</p>
     EOF;
 
     require_once('./classes/Mailer.php');
     // Instanciation de la classe Mailer et creation de l'objet $mailer
     $mailer = (object) new Mailer();
     // Appel de methode "sendEmail(arguments)" pour definir les donnees et envoyer
     $mailer->sendEMail($email, $subject, $body); 

     



   
    
}

?>