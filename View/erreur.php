<?php 
    $icon = 'Public/assets/icons8-erreur-100-noir.png';
    $titleMenu = 'Erreur';
    ob_start();
?>
<section class="container text-warning">
    <h1><span class="text-danger">Oups !</span> Tu n'es pas au bon endroit</h1>
    <p class="text-info"><?= $error ?></p>
    <a href="index.php?action=accueil" class="btn btn-success">Accueil</a>
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>