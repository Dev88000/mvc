<?php
    session_start();

    require_once 'Model/affichage.php';
    require_once 'fonctions/showArray.php';
    require_once 'Controller/inscription.php';
    require_once 'Controller/connexion.php';
    require_once 'Controller/deconnexion.php';
    require_once 'Controller/projet.php';
    require_once 'Controller/avis.php';
    
    function home() {
        $req_U = getUsers(); // affichage des users
        $req_P = getAllProjet(); // affichage des projets
        $req_A = getAllAvis(); // affichage des avis
        require 'View/home.php';
    }

?>
