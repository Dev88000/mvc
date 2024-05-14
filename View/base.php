<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Site de Tony">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $icon ?>" type="image/x-icon">
    <link rel="stylesheet" href="Public/css/default.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?= $titleMenu ?></title>
</head>

<body class="container-fluid bg-dark">
    <div class="">
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link m-3" href="index.php?action=accueil"><img style="width: 25px"
                                        src="Public/assets/icons8-accueil-100.png" class="img-fluid"
                                        alt="Responsive image"><p>Accueil</p></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link m-3" href="index.php?action=portfolio"><img style="width: 25px"
                                        src="Public/assets/icons8-portefeuille-100.png" class="img-fluid"
                                        alt="Responsive image"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link m-3" href="index.php?action=blog"><img style="width: 25px"
                                        src="Public/assets/icons8-blog-100.png" class="img-fluid"
                                        alt="Responsive image"></a>
                            </li>
                            <div class="">
                                <?php if (isset($_SESSION['prenom'])) { ?>
                                    <p class="text-white p-2">Bienvenue <?= $_SESSION['prenom']; ?> !</p>
                                <?php } else { ?>
                                    <p class="text-white p-2"><?= $titleMenu; ?></p>
                                <?php } ?>
                            </div>
                        </ul>

                        <form class="d-flex">
                            <?php if (isset($_SESSION['prenom'])) { ?>
                            <a href="index.php?action=getUsersDeconnexion" class="btn btn-primary">Déconnexion</a>
                            <?php } else { ?>
                        </form>
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                            data-bs-toggle="modal">Connectez-vous</button>
                        </p>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Modal Connexion Inscription -->
        <div class="col-10 bg-dark">
            <div class="text-end m-3">
                <div class="">
                    <p class="text-white">
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Veuillez entrer vos
                                        informations de connexion</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <?php require 'View/connexion.php'; ?>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                        data-bs-toggle="modal">Inscription</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Veuillez entrer vos
                                        informations d'inscription</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <?php require 'View/inscription.php'; ?>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                        data-bs-toggle="modal">Connexion</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div>
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
    <script src="./Public/js/bootstrap.bundle.js"></script>
</body>

</html>