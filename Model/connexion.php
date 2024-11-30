<?php
    // connexion
    function getUsersConnexionBDD($email, $password) {

        $req_U_C = getBdd()->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $req_U_C->execute([':email' => $email, ':password' => $password]);
        $user = $req_U_C->fetch(PDO::FETCH_ASSOC);
        $req_U_C->closeCursor();
        return $req_U_C;
    }
?>