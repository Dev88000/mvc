<?php
    require_once 'Model/bdd.php';
    
    // affichage des utilisateurs
    function getUsers() {
        $req_U = getBdd()->prepare('SELECT * FROM users');
        $req_U->execute();
        $users = $req_U->fetchAll(PDO::FETCH_ASSOC);
        $req_U->closeCursor();
        return $users;
    }

    // affichage des avis
    // function getJoin_A_U() {
    //     $req_A_U = getBdd()->query('SELECT nom, prenom, articles, note, date_creation FROM avis INNER JOIN users ON users.id = avis.id_users');
    //     return $req_A_U;
    // }

    function getUsersMail() {
        $req_U_M = getBdd()->prepare('SELECT COUNT(*) AS numberEmail FROM users WHERE email = ?');
        $req_U_M->execute([$_POST['email']]);
        
        while ($email_verification = $req_U_M->fetch()) {
            if ($email_verification['numberEmail'] != 0) {
                header('location: index.php?action=inscription&error=1&message=Impossible de vous identifiez correctement.');
                exit();
            }
        }
        // On vérifie que l'adresse email est valide
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            header('location: index.php?action=inscription&error=1&message=Impossible de vous identifiez correctement.');
            exit();
        }
        return $req_U_M;
    }

    // creation des utilisateurs pour l'inscription
    function getUsersInscriptionBDD($nom, $prenom, $email, $password) {
        $req_U_I = getBdd()->prepare('INSERT INTO users(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)');
        $req_U_I->execute(['nom' => $nom, 'prenom' => $prenom,  'email' => $email, 'password' => $password]);
        $success = $req_U_I->rowCount()>0;
        $req_U_I->closeCursor();
        return $success;
    }

    // affichage des utilisateurs pour la connexion
    function getUsersConnexionBDD($email, $password) {

            $req_U_C = getBdd()->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
            $req_U_C->execute([':email' => $email, ':password' => $password]);
            $user = $req_U_C->fetch(PDO::FETCH_ASSOC);
            $req_U_C->closeCursor();
            return $req_U_C;
    }