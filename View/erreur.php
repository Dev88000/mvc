<?php 
    $icon = '../Public/assets/icons8-erreur-100-noir.png';
    $titleMenu = 'Erreur';
    ob_start();
?>
<section class="container">
    <h1>Oups ! Tu n'es pas au bon endroit</h1>
    <p><?= $error ?></p>
    <a href="index.php?action=accueil">Accueil</a>
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>