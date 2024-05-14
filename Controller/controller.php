<?php
    session_start();

    require_once 'Model/affichage.php';
    require_once 'fonctions/showArray.php';

    function home() {
        $req_U = getUsers(); // Tableau des users
        require_once 'View/home.php';
    }

    function Article() {
        require 'View/article.php';
    }

    function blog() {
        $req_A = getAllArticles(); // Tableau des articles
        require 'View/blog.php';
    }

    function portfolio() {
        require 'View/portfolio.php';
    }

    function inscription() {
        require 'View/inscription.php';
    }

    function connexion() {
        require 'View/connexion.php';
    }

    function creationArticle() {
        if (!empty($_POST['titre']) && !empty($_POST['article'])) {

            $id;
            $titre = htmlspecialchars($_POST['titre']);
            $article = htmlspecialchars($_POST['article']);
            $article_date;

            if (creationArticleBDD($id, $titre, $article, $article_date)){
                header('Location: index.php');
                exit();
            } else {
                header('location: index.php?action=blog');
                exit();
            }
        }
    }

    function getUsersInscription() {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $req_U_M = getUsersMail();

            $password = password_hash($password, PASSWORD_DEFAULT);

            if (getUsersInscriptionBDD($nom, $prenom, $email, $password)){
                header('Location: index.php');
                exit();
            } else {
                header('location: index.php?action=accueil');
                exit();
            }
        }
    }
    
    function getUsersConnexion() {
        
        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            // On connecte l'utilisateur
            $req_U_C = getBdd()->prepare('SELECT * FROM users WHERE email = ?');
            $req_U_C->execute([$email]);
    
            $user = $req_U_C->fetch();
            
            // while ($user = $req_U_C->fetch()) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['connect'] = 1;
                $_SESSION['email'] = $user['email'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['id'] = $user['id'];
                header('location: index.php?success=1');
                exit();
                    
            }
            else {
                header('location: index.php?action=accueil');
                exit();
            }
        }
    }

    function getUsersDeconnexion() {
        $_SESSION = array();
        session_destroy();
        setcookie('auth', '', time()-1, '/', null, false, true);
        header('location: index.php');
        exit();
    }


    