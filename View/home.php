<?php 
    require_once './fonctions/showArray.php';
    $icon = '../Public/assets/icons8-accueil-100-noir.png';
    $titleMenu = 'Accueil';
    ob_start();
?>
<section>
    <h1 class="m-4 text-white">Bienvenue sur Site</h1>
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>