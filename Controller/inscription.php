<?php

    function inscription() {
        require 'View/inscription.php';
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

?>