<?php

if (
    isset($_GET['active']) and !empty($_GET['active']) and strlen($_GET['active']) <= 320
) {

    require_once('./classes/Sanitizing.php');
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();

    // Validation de l'adresse e-mail après decodage
    $active = (string) ($sanitizing->validateEmail(base64_decode($_GET['active']))) ? strtolower(base64_decode($_GET['active'])) : die('is not a valid email');

    require_once('./classes/Database.php');
    // Appel de la classe abstraite Database et recuperation des donnees dans la table "users"
    $data = (array) Database::query(
        'SELECT `id`, `activate` FROM `users` WHERE `email` = (:email)', 
        array(':email' => $active)
    );

    $activate = (int) $data[0]['activate'];

    if ($activate === 0) {
        $id = (int) $data[0]['id'];
        // Appel de la classe abstraite Database et modification des donnees dans la table "users" pour la colonne "status"
        Database::query(
            'UPDATE `users` SET `activate` = 1 WHERE `id` = (:id)', 
            array(':id' => $id)
        );
    } else {
        die('email is already active');
    }

}

?>