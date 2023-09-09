var hash = document.location.hash

switch (true) {
    case (hash === "#emailInvalide"): // Premiere cas: si hash localise '#username'
        text = "identifiant invalide"; // affectation de la valeur a la variable
        break; //arrete 
    case (hash === "#password"): // Deuxieme cas: si hash localise '#password'
        text = "Mot de passe invalide."; // affectation de la valeur a la variable
        break; // arrete 
    case (hash === "#activate"): // Deuxieme cas: si hash localise '#forget'
        window.setTimeout("location=('./');",5000);  // affectation de la valeur a la variable
        break; // arrete 
    case (hash === "#activate-again"): // Deuxieme cas: si hash localise '#forget'
        text = "Votre compte existe déja mais n'est pas activé, un email d'activation vient de vous être renvoyer";  // affectation de la valeur a la variable
        break; // arrete   
    case (hash === "#already-existe"): // Deuxieme cas: si hash localise '#forget'
        text = "Votre compte existe déja";  // affectation de la valeur a la variable
        break; // arrete   
    case (hash === "#nonactiver"): // Deuxieme cas: si hash localise '#forget'
        text = "Votre compte n'est pas activé, cliquer sur l'email d'activation, Merci";  // affectation de la valeur a la variable
        break; // arrete        
    default: // si aucune des condtions precedente est vrai alors 
        text = ""; // affectation de la valeur(vide) a la variable
       
}

