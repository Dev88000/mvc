<?php

    function getUsersDeconnexion() {
        $_SESSION = array();
        session_destroy();
        setcookie('auth', '', time()-1, '/', null, false, true);
        header('location: index.php');
        exit();
    }

?>