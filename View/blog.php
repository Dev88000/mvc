<?php 
    $icon = 'Public/assets/icons8-blog-100-noir.png';
    $titleMenu = 'Blog';
    ob_start();
?>
<section class="">

    <div class="row">
        <?php
            foreach ($req_A as $article) {
        ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 g-4 ">
            <div class="">
                <div class="card">
                    <!-- <img src="Public/assets/LogoDev.png" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $article['titre']; ?></h5>
                        <p class="card-text text-start"><?php echo $article['articles']; ?></p>
                        <p class="card-text text-danger text-end "><small><?php echo date("d-m-Y"); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>



    <!-- Modal creation article -->
    <div class="modal fade" id="creation_article" aria-hidden="true" aria-labelledby="creation_article_Label"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="creation_article_Label">Ajouter un article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php require 'View/article.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary m-3" data-bs-target="#creation_article" data-bs-toggle="modal">Ajouter un
    article</button>


</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>