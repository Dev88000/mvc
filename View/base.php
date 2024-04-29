<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Site de Tony">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $icon ?>" type="image/x-icon">
        <link rel="stylesheet" href="Public/css/default.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Dev Site</title>
    </head>
    <body>
        <div>
            <div class="row">
                <div class="col-2">
                    <header class="vh-100 bg-dark text-center">
                        <p class="text-white p-4"><?= $titleMenu ?></p>
                        <img src="Public/assets/Tony.jpg" class="img-fluid w-75 rounded-2" alt="Responsive image">
                        <nav class="nav flex-column mt-5">
                            <a class="nav-link active m-3" href="index.php?action=accueil"><img src="Public/assets/icons8-accueil-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3" href="index.php?action=portfolio"><img src="Public/assets/icons8-portefeuille-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3" href="index.php?action=blog"><img src="Public/assets/icons8-blog-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                            <a class="nav-link m-3" href="index.php?action=getUsersDeconnexion"><img src="Public/assets/icons8-deconnexion-100.png" class="img-fluid w-25" alt="Responsive image"></a>
                        </nav>
                        <footer class="text-white m-4">
                            <p>© 2023 - Tous droits réservés</p>
                        </footer>
                    </header>
                </div>
                <div class="col-10 bg-dark">
                    <div class="text-end m-3">
                        <div>
                            <?php if (isset($_SESSION['prenom'])) { ?>
                                <p class="text-white">Bonjour <?= $_SESSION['prenom'] ?></p>
                            <?php } else { ?>
                                <p class="text-white">
                                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Veuillez entrer vos informations de connexion</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <?php require 'View/connexion.php'; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Inscription</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Veuillez entrer vos informations d'inscription</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <?php require 'View/inscription.php'; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Connexion</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Connectez-vous</button>
                                    </p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="text-center">
                        <div>
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <script src="./Public/js/bootstrap.bundle.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/t1qRuexa6MHBX2sOPqFCxKtYO5GCZHCo/Q/CU=" crossorigin="anonymous"></script>
    </body>
</html>