<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Blog de Tony">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $icon ?>" type="image/x-icon">
    <link rel="stylesheet" href="Public/css/default.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?= $titleMenu ?></title>
</head>

<body class="container-fluid bg-dark">
    <header class="text-end m-3">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button class="btn btn-primary m-3" data-bs-target="#creation_avis" data-bs-toggle="modal">Menu des avis</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-primary m-3" data-bs-target="#creation_projet" data-bs-toggle="modal">Menu des projets</button>
                        </li>
                        <li class="nav-item"> 
                            <?php if (isset($_SESSION['prenom'])) { ?>
                                    <a href="index.php?action=getUsersDeconnexion" class="btn btn-danger m-3">Déconnexion</a>
                            <?php } else { ?>
                                <button class="btn btn-success m-3" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Connectez-vous</button>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Modal Connexion Inscription -->
    <div class="">
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
    </div>

    <!-- Affichage des pages -->
    <div class="text-center">
        <div>
            <?= $content ?>
        </div>
    </div>
    <script src="./Public/js/bootstrap.bundle.js"></script>
</body>

</html>