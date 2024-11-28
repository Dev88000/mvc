<?php

    function connexion() {
        require 'View/connexion.php';
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
                $_SESSION['is_admin'] = $user['is_admin'];
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

?>