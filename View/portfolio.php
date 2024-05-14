<?php 
    $icon = 'Public/assets/icons8-portefeuille-100-noir.png';
    $titleMenu = 'Portfolio';
    ob_start();
?>
<section class="">
    <div class="row">
        <?php
            foreach ($req_P as $projet) {
        ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 g-4 ">
            <div class="">
                <div class="card">
                    <!-- <img src="Public/assets/LogoDev.png" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $projet['titre']; ?></h5>
                        <p class="card-text"><?php echo $projet['projet']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>



    <!-- Modal creation projet -->
    <div class="modal fade" id="creation_projet" aria-hidden="true" aria-labelledby="creation_projet_Label"
        tabindex="-1">
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

    <button class="btn btn-primary m-3" data-bs-target="#creation_projet" data-bs-toggle="modal">Ajouter un
        projet</button>


</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>