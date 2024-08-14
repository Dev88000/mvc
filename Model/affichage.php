<?php
    require_once 'Model/bdd.php';
    require_once 'fonctions/showArray.php';
  
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
///////////////////////////////////////////////////////////////////////////////////    
///////////////////////////////////////////////////////////////////////////////////
    // affichage des projets
    function getAllProjet() {
        $req_P = getBdd()->prepare('SELECT * FROM projet');
        $req_P->execute();
        $projet = $req_P->fetchAll(PDO::FETCH_ASSOC);
        $req_P->closeCursor();
        return $projet;
    }

    // création du projet
    function creationProjetBDD($id, $user_id, $titre, $projet) {
        $req_C_P = getBdd()->prepare('INSERT INTO projet(id, user_id, titre, projet) VALUES(:id, :user_id, :titre, :projet)');
        $req_C_P->execute(['id' => $id, 'user_id' => $user_id, 'titre' => $titre, 'projet' => $projet]);
    }

    // suppression du projet
    function deleteProjet($id) {
        $bdd = getBdd();
        $req = $bdd->prepare('DELETE FROM projet WHERE id = ?');
        return $req->execute([$id]);
    }

///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
    // affichage des avis
    function getAllAvis() {
        $req_A = getBdd()->prepare('SELECT * FROM avis');
        $req_A->execute();
        $avis = $req_A->fetchAll(PDO::FETCH_ASSOC);
        $req_A->closeCursor();
        return $avis;
    }

    // création de l'avis
    function creationAvisBDD($id, $user_id, $titre, $avis) {
        $req_C_A = getBdd()->prepare('INSERT INTO avis(id, user_id, titre, avis) VALUES(:id, :user_id, :titre, :avis)');
        $req_C_A->execute(['id' => $id, 'user_id' => $user_id, 'titre' => $titre, 'avis' => $avis]);
    }

    // suppression de l'avis
    function deleteAvis($id) {
        $bdd = getBdd();
        $req = $bdd->prepare('DELETE FROM avis WHERE id = ?');
        return $req->execute([$id]);
    }

///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
    // vérification de l'email
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
///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
    // inscription
    function getUsersInscriptionBDD($nom, $prenom, $email, $password) {
        $req_U_I = getBdd()->prepare('INSERT INTO users(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)');
        $req_U_I->execute(['nom' => $nom, 'prenom' => $prenom,  'email' => $email, 'password' => $password]);
        $success = $req_U_I->rowCount()>0;
        $req_U_I->closeCursor();
        return $success;
    }

    // connexion
    function getUsersConnexionBDD($email, $password) {

            $req_U_C = getBdd()->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
            $req_U_C->execute([':email' => $email, ':password' => $password]);
            $user = $req_U_C->fetch(PDO::FETCH_ASSOC);
            $req_U_C->closeCursor();
            return $req_U_C;
    }
///////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
    // formatage de la date
    function formatDateFR($date) {
        setlocale(LC_TIME, 'fr_FR.UTF-8');
        return strftime("%d %B %Y", strtotime($date));
    }