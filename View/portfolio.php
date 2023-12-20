<?php 
    $icon = '../Public/assets/icons8-portefeuille-100-noir.png';
    $titleMenu = 'Portfolio';
    ob_start();
?>
<section>
    <h1 class="m-4 text-white">Bienvenue sur mon Portfolio</h1>

    
    




    
    <div class="card w-25 bg-success">
        <img src="../Public/assets/LogoDev.png" class="card-img-top" alt="...">
        <div class="card-body bg-info">
            <h5 class="card-title">Premier projet</h5>
            <p class="card-text">Voici mon premier projet dans le développement web.</p>
            <a href="#" class="btn btn-primary">Voir le projet</a>
        </div>
    </div>
    
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>