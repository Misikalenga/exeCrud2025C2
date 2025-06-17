<?php

// appel des dépendances
include "../model/ArticleModel.php";
# controller/PrivateController.php


// Accueil
if(!isset($_GET['pg'])){
    // chargement des articles pour l'accueil
    $articles = getArticlesPublished($db);
    // appel de la vue
    include "../view/homepage.html.php";

// page about
}elseif ($_GET['pg']==='about'){
    // appel de la vue
    include "../view/about.html.php";

// nous sommes sur la page de connexion
}elseif($_GET['pg']==="disconnect"){
        disconnectUser();
        header("Location: ./");
        exit();
// nous voulons supprimer un article
}elseif($_GET['pg']==="delete"&& ctype_digit($_GET['articleId'])){
    $idarticle = (int) $_GET['articleId'];
    $delete = deleteArticleByID($db,$idarticle);
    if($delete) {
        header("Location: ./?pg=admin");
        exit();
    }
    // ICI

// accueil de l'administration
}elseif($_GET['pg']==="admin") {
        // récupération de tous les articles
        $articles = getArticlesPrivate($db);
        include "../view/admin.html.php";

// insertion
}elseif($_GET['pg']==="insert"){
        // si on a envoyé un nouvel article
        if(isset($_POST['article_title'])){
            $insert = addArticle($db,$_POST);
            if($insert){
                // retour sur l'admin avec le message de remerciement
                header("Location: ./?pg=admin&message=Merci pour ce message");
                exit();
            }else{
                $error = "Erreur lors de l'insertion de l'article <a  href='#' onclick='history.go(-1);'>retour au formulaire</a>";
            }
        }
        include "../view/admin.insert.html.php";
}else{
    include "../view/404.html.php";
}
