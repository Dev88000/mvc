<?php

    function Avis() {
        require 'View/avis.php';
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

    function supprimerAvis() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['oui_avis'])) {

            $id = intval($_POST['oui_avis']);
            
            if (deleteAvis($id)) {
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

?>