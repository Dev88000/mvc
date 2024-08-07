<?php 
    require_once './fonctions/showArray.php';
    $icon = 'Public/assets/icons8-accueil-100-noir.png';
    $titleMenu = 'Accueil';
    ob_start();


    // Définir la variable $id avant d'inclure modalSupp.php
    $id = isset($_GET['id']) ? $_GET['id'] : null;
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
    </div>
</main>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// --> 
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
<!-- Modal projet -->
<div class="modal fade" id="menu_projet" aria-hidden="true" aria-labelledby="menu_projet_Label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="menu_projet_Label">Menu des projets</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php require 'View/modalProjet.php'; ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal afficher et supprimer projet -->
<div class="container">
    <div class="row">
        <?php
            foreach ($req_P as $projet) {
                $req_U_B_I = getUsersById($projet["user_id"]);
        ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 g-4">
            <div class="">
                <div class="card bg-success">
                    <div class="card-body">
                        <button type="button" name="modif_projet" class="btn"><i class="fa-solid fa-pen text-warning"></i></button>
                        <button type="button" name="supp_projet" class="btn" data-bs-target="#supp_projet_<?php echo $projet['id']; ?>" data-bs-toggle="modal"><i class="fa-solid fa-trash text-danger"></i></button>
                        <h5 class="card-title"><?php echo $projet['titre']; ?></h5>
                        <p class="card-text text-start"><?php echo $projet['projet']; ?></p>
                        <p class="card-text text-dark text-end">
                        <small>Projet posté le : <?php echo formatDateFR($projet['projet_date']); ?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal supprimer projet -->
        <div class="modal fade" id="supp_projet_<?php echo $projet['id']; ?>" aria-hidden="true" aria-labelledby="supp_projet_Label_<?php echo $projet['id']; ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="supp_projet_Label_<?php echo $projet['id']; ?>">Voulez-vous vraiment supprimer votre projet ?</h1>
                        <?php if (isset($_SESSION['prenom'])) { ?>
                            <span class="text-black m-3">ID du projet : <?php echo $projet['id']; ?></span>
                        <?php } else { ?>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <?php } ?>
                    </div>
                    <div class="modal-body">
                        <?php 
                        // Passer l'ID du  projet à modalSuppProjet.php
                        $id = $projet['id'];
                        require 'View/modalSuppProjet.php'; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
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
<!-- Modal avis -->
<div class="modal fade" id="menu_avis" aria-hidden="true" aria-labelledby="menu_avis_Label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="menu_avis_Label">Menu des avis</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php require 'View/modalAvis.php'; ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal afficher et supprimer avis -->
<div class="container">
    <div class="row">
        <?php
            foreach ($req_A as $avis) {
                $req_U_B_I = getUsersById($avis["user_id"]);
        ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 g-4">
            <div class="">
                <div class="card bg-info">
                    <div class="card-body">
                        <button type="button" name="modif_avis" class="btn"><i class="fa-solid fa-pen text-warning"></i></button>
                        <button type="button" name="supp_avis" class="btn" data-bs-target="#supp_avis_<?php echo $avis['id']; ?>" data-bs-toggle="modal"><i class="fa-solid fa-trash text-danger"></i></button>
                        <h5 class="card-title"><?php echo $avis['titre']; ?></h5>
                        <p class="card-text text-start"><?php echo $avis['avis']; ?></p>
                        <p class="card-text text-dark text-end">
                        <small><?php echo $req_U_B_I['prenom']; ?> à posté le : <?php echo formatDateFR($avis['avis_date']); ?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal supprimer avis pour chaque avis -->
        <div class="modal fade" id="supp_avis_<?php echo $avis['id']; ?>" aria-hidden="true" aria-labelledby="supp_avis_Label_<?php echo $avis['id']; ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="supp_avis_Label_<?php echo $avis['id']; ?>">Voulez-vous vraiment supprimer votre avis ?</h1>
                        <?php if (isset($_SESSION['prenom'])) { ?>
                            <span class="text-black m-3">ID de l'avis : <?php echo $avis['id']; ?></span>
                        <?php } else { ?>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <?php } ?>
                    </div>
                    <div class="modal-body">
                        <?php 
                        // Passer l'ID de l'avis à modalSuppAvis.php
                        $id = $avis['id'];
                        require 'View/modalSuppAvis.php'; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>