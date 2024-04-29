<?php 
    $icon = 'Public/assets/icons8-blog-100-noir.png';
    $titleMenu = 'Blog';
    $name = isset($_SESSION['prenom']) ? $_SESSION['prenom'] : 'Vous';
    ob_start();
?>
    <section>
    
    </section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>