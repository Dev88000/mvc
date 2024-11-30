<?php
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
?>