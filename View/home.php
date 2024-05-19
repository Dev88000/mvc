<?php 
    require_once './fonctions/showArray.php';
    $icon = 'Public/assets/icons8-accueil-100-noir.png';
    $titleMenu = 'Accueil';
    ob_start();
?>
<main class="container">
    <!-- Premiere partie -->
    <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <!-- Partie description et DL CV -->
                    <div class="col-12 col-sm-12 col-lg-5 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">Bienvenue sur mon blog</h1>
                                <p class="card-text text-start">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. laudantium
                                    nemo? Iste nobis ex minus odio porro amet aliquam, maxime error illo, architecto
                                    saepe harum
                                    exercitationem ipsum, quas sequi inventore officia perspiciatis sapiente
                                    reprehenderit. Hic
                                </p>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Télécharger mon CV</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Partie dernier projet en video -->
                    <div class="col-12 col-sm-12 col-lg-5 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Mon dernier projet</h2>
                                <video class="col-12 col-sm-12 col-lg-12 col-xl-12" width="320" height="240" controls>
                                    <source src="Public/assets/favCursor.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Captures d'image des projets -->


        <!-- Creation de projet -->
        <div class="row">
            <?php
                foreach ($req_P as $projet) {
            ?>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 g-4">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $projet['titre']; ?></h5>
                            <p class="card-text text-start"><?php echo $projet['projet']; ?></p>
                            <p class="card-text text-danger text-end ">
                                <small>Projet mis en ligne le : <?php echo date("d-m-Y"); ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

        <!-- Creation d'avis -->
        <div class="row">
            <?php
                foreach ($req_A as $avis) {
            ?>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 g-4">
                <div class="">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $avis['titre']; ?></h5>
                            <p class="card-text text-start"><?php echo $avis['avis']; ?></p>
                            <p class="card-text text-dark text-end ">
                                <small> à poster le : <?php echo date("d-m-Y"); ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</main>

<!-- Modal creation projet -->
<div class="modal fade" id="creation_projet" aria-hidden="true" aria-labelledby="creation_projet_Label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="creation_projet_Label">Ajouter un projet</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php require 'View/projet.php'; ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal creation Avis -->
<div class="modal fade" id="creation_avis" aria-hidden="true" aria-labelledby="creation_avis_Label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="creation_avis_Label">Ajouter un avis</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php require 'View/avis.php'; ?>
            </div>
        </div>
    </div>avis
</div>



<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>