<?php

if (
    isset($_GET['password']) and !empty($_GET['password'])
) {

    $meter = 0;

    // verifie la longueur du mot de passe
    $meter += (strlen($_GET['password']) >= 8) ? 1 : 0;

    // verifie l'existence de minuscule
    $meter += preg_match('/[a-z]/', $_GET['password']);

    // verifie l'existence de majuscule
    $meter += preg_match('/[A-Z]/', $_GET['password']);

    // verifie l'existence de chiffre ou de nombre
    $meter += preg_match('/[\d]/', $_GET['password']);

    // verifie l'existence de caractere special
    $meter += preg_match('/[^a-zA-Z\d]/', $_GET['password']);

    if ($meter === 5) {
        session_start();
        $_SESSION['password'] = $_GET['password'];
    }
    
    // retourne la mesure
    echo $meter;

}


?>