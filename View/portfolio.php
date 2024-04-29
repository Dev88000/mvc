<?php 
    $icon = 'Public/assets/icons8-portefeuille-100-noir.png';
    $titleMenu = 'Portfolio';
    ob_start();
?>
<section>
<div class="container">
            <div class="card-group mb-5">
                <div class="card m-1">
                    <div class="card-header">1</div>
                    <div class="card-body">
                        <h3 class="card-title">Titre de la première carte</h5>
                        <p class="card-text">Une ligne de texte dans notre première carte.</p>
                        <p class="card-text"><small class="text-muted">Ligne de texte supplémentaire</small></p>
                    </div>
                    <div class="card-footer">Pied de la première carte</div>
                </div>
                <div class="card m-3">
                    <div class="card-header">2</div>
                    <div class="card-body">
                        <h3 class="card-title">Titre de la seconde carte</h5>
                        <p class="card-text">Une ligne de texte dans notre seconde carte.</p>
                    </div>
                    <div class="card-footer">Pied de la seconde carte</div>
                </div>
                <div class="card m-5">
                    <div class="card-header">3</div>
                    <div class="card-body">
                        <h3 class="card-title">Titre de la seconde carte</h5>
                        <p class="card-text">Une ligne de texte dans notre seconde carte.</p>
                    </div>
                    <div class="card-footer">Pied de la seconde carte</div>
                </div>
                <div class="card m-3">
                    <div class="card-header">4</div>
                    <div class="card-body">
                        <h3 class="card-title">Titre de la seconde carte</h5>
                        <p class="card-text">Une ligne de texte dans notre seconde carte.</p>
                    </div>
                    <div class="card-footer">Pied de la seconde carte</div>
                </div>
                <div class="card m-1">
                    <div class="card-header">5</div>
                    <div class="card-body">
                        <h3 class="card-title">Titre de la seconde carte</h5>
                        <p class="card-text">Une ligne de texte dans notre seconde carte.</p>
                    </div>
                    <div class="card-footer">Pied de la seconde carte</div>
                </div>
            </div>
    
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>