<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Site de Tony">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $icon ?>" type="image/x-icon">
        <link rel="stylesheet" href="../Public/css/default.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
        <title>Dev Site</title>
    </head>
    <body>
        <div>
            <div class="row">
                <div class="col-2">
                    <header class="vh-100 bg-dark text-center">
                        <p class="text-white p-4"><?= $titleMenu ?></p>
                        <img src="../Public/assets/Tony.jpg" class="img-fluid w-75 rounded-2" alt="Responsive image">
                        <nav class="nav flex-column mt-5">
                            <a class="nav-link active m-3" href="index.php?action=accueil"><img src="../Public/assets/icons8-accueil-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3" href="index.php?action=avis"><img src="../Public/assets/icons8-avis-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3"" href="index.php?action=portfolio"><img src="../Public/assets/icons8-portefeuille-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3"" href="index.php?action=blog"><img src="../Public/assets/icons8-blog-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3"" href="index.php?action=inscription"><img src="../Public/assets/icons8-inscription-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3"" href="index.php?action=connexion"><img src="../Public/assets/icons8-connect-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3"" href="index.php?action=getUsersDeconnexion"><img src="../Public/assets/icons8-deconnexion-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                        </nav>
                        <footer class="text-white m-4">
                            <p>© 2023 - Tous droits réservés</p>
                        </footer>
                    </header>
                </div>
                <div class="col-10 bg-dark">
                    <div class="text-center">
                        <div>
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>