<?php
    if (isset($_COOKIE["auth"]) && !isset($_SESSION["connect"])) {

        require("data/bddNetflix.php");

        $secret = htmlspecialchars($_COOKIE["auth"]);

        $req = $bdd->prepare("SELECT COUNT(*) AS secretNumber FROM inscription WHERE secret = ?");
        $req->execute([$secret]);

        while ($user = $req->fetch()) {
            if ($user["secretNumber"] == 1) {
                $reqUser = $bdd->prepare("SELECT * FROM inscription WHERE secret = ?");
                $reqUser->execute([$secret]);

                while ($user = $reqUser->fetch()) {
                    $_SESSION["connect"] = 1;
                    $_SESSION["email"] = $user["email"];
                    $_SESSION["nom"] = $user["nom"];
                    $_SESSION["id"] = $user["id"];
                    $_SESSION["secret"] = $user["secret"];
                }
            }
        }
    }
?>