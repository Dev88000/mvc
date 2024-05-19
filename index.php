<?php
    require_once 'Controller/controller.php';
    require_once 'fonctions/showArray.php';

    try {
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'accueil') {
                home();
            }
            elseif ($_GET['action'] == 'portfolio') {
                portfolio();
            }
            elseif ($_GET['action'] == 'creationProjet') {
                creationProjet();
            }
            elseif ($_GET['action'] == 'creationAvis') {
                creationAvis();
            }
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
            elseif ($_GET['action'] == 'inscription') {
                inscription();
            }
            elseif ($_GET['action'] == 'getUsersInscription') {
                getUsersInscription($_POST);
            }
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
            elseif ($_GET['action'] == 'connexion') {
                connexion();
            }
            elseif ($_GET['action'] == 'getUsersConnexion') {
                getUsersConnexion($_POST);
            }
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////            
            elseif ($_GET['action'] == 'getUsersDeconnexion') {
                getUsersDeconnexion();
            }
            else {
                throw new Exception('Cette page n\'existe pas ou a été déplacée');
            }
        }
        else {
            home();
        }
    }
    catch(Exception $e) {
        $error = $e->getMessage();
        require_once 'View/erreur.php';
    }