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


</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>