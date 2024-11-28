<?php

    function Projet() {
        require 'View/projet.php';
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

?>