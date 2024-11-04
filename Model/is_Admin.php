<?php
    require_once 'Model/bdd.php';
 // Vérification si l'utilisateur est un admin
    function isAdmin($userId) {
        $req_admin = getBdd()->prepare('SELECT is_admin FROM users WHERE id = ?');
        $req_admin->execute([$userId]);
        $result = $req_admin->fetch(PDO::FETCH_ASSOC);
        $req_admin->closeCursor();
        
        return $result && isset($result['is_admin']) && $result['is_admin'] == 1;
    }
?>