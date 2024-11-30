<?php
    require_once 'Model/bdd.php';
    require_once 'fonctions/showArray.php';
    require_once 'Model/mail.php';
    require_once 'Model/inscription.php';
    require_once 'Model/connexion.php';
    require_once 'Model/projet.php';
    require_once 'Model/avis.php';
    require_once 'fonctions/date.php';

    // affichage des utilisateurs
    function getUsers() {
        $req_U = getBdd()->prepare('SELECT * FROM users');
        $req_U->execute();
        $users = $req_U->fetchAll(PDO::FETCH_ASSOC);
        $req_U->closeCursor();
        return $users;
    }

    function getUsersById($id) {
        $req_U_B_I = getBdd()->prepare("SELECT * FROM users WHERE id=?");
        $req_U_B_I->execute([$id]);
        $userById = $req_U_B_I->fetch(PDO::FETCH_ASSOC);
        return $userById;
    }
?>