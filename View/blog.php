<?php 
    $icon = 'Public/assets/icons8-blog-100-noir.png';
    $titleMenu = 'Blog';
    ob_start();
?>
<section>
    <h1 class="m-4 text-white">Bienvenue sur mon blog</h1>
 
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>