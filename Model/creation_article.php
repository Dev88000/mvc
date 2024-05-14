<?php
    require_once 'Model/bdd.php';

    function creationArticle($article) {
        $req_C_A = getBdd()->prepare('INSERT INTO article(articles) VALUES(:articles)');
        $req_C_A->execute(['articles' => $article]);
        //return $req_C_A;
    }
?>

