<?php 
    require_once './fonctions/showArray.php';
    $icon = '../Public/assets/icons8-accueil-100-noir.png';
    $titleMenu = 'Accueil';
    ob_start();
?>
<section>
    <h1 class="m-4 text-white">Bienvenue sur mon Portfolio</h1>
    <!-- <div class="text-white"><?php showArray(getUsers()); ?></div> -->

    <?php if (isset($_SESSION['prenom'])) { ?>
        <p class="text-white">Vous êtes connecté en tant que <?= $_SESSION['prenom'] ?></p>
    <?php } else { ?>
        <p class="text-white">Vous n'etes pas connecté</p>
    <?php } ?>


        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Veuillez entrer vos informations de connexion</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- <section class="w-100">
                            <div class="w-100">
                                <form method="post" action="index.php?action=getUsersConnexion">
                                    <div class="input-group mb-3">
                                            <input class="form-control" type="email" name="email" placeholder="Votre adresse email" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">@*****.com</span>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                            <input type="password" name="password" placeholder="Mot de passe" required class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">********</span>
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-primary">Connexion</button>
                                </form>
                            </div>
                        </section> -->
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
                    <div class="modal-body">
                        <!-- <section class="w-100">
                            <div class="w-100">
                                <form method="post" action="index.php?action=getUsersInscription">
                                <div class="input-group mb-3">
                                    <input type="text" name="nom" placeholder="Votre nom" required class="form-control" aria-label="username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">exemple = Doe</span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" name="prenom" placeholder="Votre prénom" required class="form-control" aria-label="username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text">exemple = John</span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input class="form-control" type="email" name="email" placeholder="Votre adresse email" required aria-label="Username" aria-describedby="basic-addon1">
                                    <div class="input-group-append">
                                        <span class="input-group-text">@*****.com</span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="password" placeholder="Mot de passe" required class="form-control" aria-label="username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">********</span>
                                    </div>
                                </div>
                                <button id="inscriptionButton" class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">S'inscrire</button>

                                </form>
                            </div>
                        </section> -->
                        <?php require 'View/inscription.php'; ?>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Connexion</button>
                    </div>
                </div>
            </div>
        </div>
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Connectez-vous</button>

</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>