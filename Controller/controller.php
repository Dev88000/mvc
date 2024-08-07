<?php
    session_start();

    require_once 'Model/affichage.php';
    require_once 'fonctions/showArray.php';

    function supprimerAvis() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['oui_avis'])) {
            $id = intval($_POST['oui_avis']);
            // Débogage : afficher l'ID 
            echo "ID à supprimer : " . $id;
            // Tentative de suppression 
            $result = deleteAvis($id);
            
            if ($result) {
                $_SESSION['notification'] = [
                    'message' => "L'élément a été supprimé avec succès.",
                    'type' => 'success'
                ];
            } else {
                $_SESSION['notification'] = [
                    'message' => "Une erreur est survenue lors de la suppression.",
                    'type' => 'error'
                ];
            }
        } else {
            $_SESSION['notification'] = [
                'message' => "Requête invalide pour la suppression.",
                'type' => 'error'
            ];
        }

        // Redirection vers la page d'accueil
        header('Location: index.php?action=accueil');
        exit();
    }

    function supprimerProjet() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['oui_projet'])) {
            $id = intval($_POST['oui_projet']);
            // Débogage : afficher l'ID 
            echo "ID à supprimer : " . $id;
            // Tentative de suppression 
            $result = deleteProjet($id);
            
            if ($result) {
                $_SESSION['notification'] = [
                    'message' => "L'élément a été supprimé avec succès.",
                    'type' => 'success'
                ];
            } else {
                $_SESSION['notification'] = [
                    'message' => "Une erreur est survenue lors de la suppression.",
                    'type' => 'error'
                ];
            }
        } else {
            $_SESSION['notification'] = [
                'message' => "Requête invalide pour la suppression.",
                'type' => 'error'
            ];
        }

        // Redirection vers la page d'accueil
        header('Location: index.php?action=accueil');
        exit();
    }

    function home() {
        $req_U = getUsers(); // Tableau des users
        $req_P = getAllProjet(); // Tableau des projets
        $req_A = getAllAvis(); // Tableau des avis
        require 'View/home.php';
    }

    function Avis() {
        require 'View/avis.php';
    }

    function Projet() {
        require 'View/projet.php';
    }

    function inscription() {
        require 'View/inscription.php';
    }

    function connexion() {
        require 'View/connexion.php';
    }

    function creationProjet() {
        if (!empty($_POST['titre']) && !empty($_POST['projet']) && isset($_SESSION['id'])) {

            $id;
            $user_id = $_SESSION["id"];
            $titre = htmlspecialchars($_POST['titre']);
            $projet = htmlspecialchars($_POST['projet']);
        
            if (creationProjetBDD($id, $user_id, $titre, $projet)){
                $_SESSION['notification'] = [
                    'message' => "Votre projet a été créé avec succès.",
                    'type' => 'success'
                ];
            } else {
                $_SESSION['notification'] = [
                    'message' => "Votre projet a été créé avec succès.",
                    'type' => 'error'
                ];
            }
            
                header('location: index.php?action=accueil');
                exit();
            }
        }

    function creationAvis() {
        if (!empty($_POST['titre']) && !empty($_POST['avis']) && isset($_SESSION['id'])) {

            $id;
            $user_id = $_SESSION["id"];
            $titre = htmlspecialchars($_POST['titre']);
            $avis = htmlspecialchars($_POST['avis']);
        
            if (creationAvisBDD($id, $user_id, $titre, $avis)){
                $_SESSION['notification'] = [
                    'message' => "Votre avis a été créé avec succès.",
                    'type' => 'success'
                ];
            } else {
                $_SESSION['notification'] = [
                    //'message' => "Une erreur est survenue lors de la création de l'avis.",
                    'message' => "Votre avis a été créé avec succès.",
                    'type' => 'error'
                ];
            }
            
                header('location: index.php?action=accueil');
                exit();
            }
        }

    function getUsersInscription() {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $req_U_M = getUsersMail();

            $password = password_hash($password, PASSWORD_DEFAULT);

            if (getUsersInscriptionBDD($nom, $prenom, $email, $password)){
                header('Location: index.php');
                exit();
            } else {
                header('location: index.php?action=accueil');
                exit();
            }
        }
    }
    
    function getUsersConnexion() {   
        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            // On connecte l'utilisateur
            $req_U_C = getBdd()->prepare('SELECT * FROM users WHERE email = ?');
            $req_U_C->execute([$email]);
    
            $user = $req_U_C->fetch();
            
            if (password_verify($password, $user['password'])) {
                $_SESSION['connect'] = 1;
                $_SESSION['email'] = $user['email'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['id'] = $user['id'];
                header('location: index.php?success=1');
                exit();
                    
            }
            else {
                header('location: index.php?action=accueil');
                exit();
            }
        }
    }

    function getUsersDeconnexion() {
        $_SESSION = array();
        session_destroy();
        setcookie('auth', '', time()-1, '/', null, false, true);
        header('location: index.php');
        exit();
    }


    