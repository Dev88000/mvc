<?php
    // inscription
    function getUsersInscriptionBDD($nom, $prenom, $email, $password) {
        $req_U_I = getBdd()->prepare('INSERT INTO users(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)');
        $req_U_I->execute(['nom' => $nom, 'prenom' => $prenom,  'email' => $email, 'password' => $password]);
        $success = $req_U_I->rowCount()>0;
        $req_U_I->closeCursor();
        return $success;
    }
?>