<?php 
    require_once './fonctions/showArray.php';
    $icon = 'Public/assets/icons8-accueil-100-noir.png';
    $titleMenu = 'Accueil';
    ob_start();
?>
<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 g-4 ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bienvenue sur mon blog</h4>
                    <p class="card-text text-start">Lorem ipsum, dolor sit amet consectetur adipisicing elit. laudantium
                        nemo? Iste nobis ex minus odio porro amet aliquam, maxime error illo, architecto saepe harum
                        exercitationem ipsum, quas sequi inventore officia perspiciatis sapiente reprehenderit. Hic
                        facilis veniam voluptatem!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>