<?php 
    $icon = '../Public/assets/icons8-portefeuille-100-noir.png';
    $titleMenu = 'Portfolio';
    ob_start();
?>
<section>
    <h1 class="m-4 text-white">Bienvenue sur mon Portfolio</h1>
    <p class="m-4 text-white">Lorem ipsum dolor sit amet cons ectet
        ur adipisicing elit. Quisquam, voluptate.
    </p>
    
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>