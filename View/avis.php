<?php 
    $icon = '../Public/assets/icons8-avis-100-noir.png';
    $titleMenu = 'Avis';
    ob_start();
?>
<section class="text-white">
    <h1>Avis</h1>
    <p>Vous devez être connecter pour laisser un avis.</p>
    <?php
       while ($users = $req_A_U->fetch()){ ?>
        <p>
            <strong>
                <?= $users['nom'] ?>
                <?= $users['prenom'] ?>
            </strong> : 
                <?= $users['articles'] ?>
                <?= $users['note'] ?>
                <?= $users['date_creation'] ?>
        </p>
        <?php
        }
    ?>
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>