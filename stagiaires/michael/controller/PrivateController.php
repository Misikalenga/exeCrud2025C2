<?php
# controller/PrivateController.php
require_once "../model/ArticleModel.php";
require_once "../model/UserModel.php";

if (isset($_GET['pg'])) {
    // déconnexion
    if ($_GET['pg'] === "logout") {
        // appel de la fonction de déconnexion qui DOIT
        // nous envoyer un booléen (on s'assure de la synchronicité)
        // de base de PHP (voir https://amphp.org/ ou https://reactphp.org/http/) / ou problème de surcharge réseau
        if (disconnectUser())
            // redirection
            header("Location: ./");
        exit();
        // page à propos
    } elseif ($_GET['pg'] === "about") {

        // appel de la vue
        require_once "../view/about.html.php";

        // accueil de l'administration
    } elseif ($_GET['pg'] === "admin") {
        //chargement des articles pour l'administration
        $articles = getAllArticles($db);
        // appel de la vue
        require_once "../view/admin.homepage.html.php";
    } elseif ($_GET['pg'] === "delete"
        && isset($_GET['id'])
        && ctype_digit($_GET['id'])) {

        // on convertit le string en int
        // settype($_GET['id'],"integer");
        $idarticle = (int) $_GET['id'];

        //suppression d'un article
        if(deleteArticleById($db,$idarticle)){
            header("Location: ./?pg=admin");
            exit();
        }
    // on souhaite ajouter un article
    }elseif ($_GET['pg']==="addArticle"){
        // si les variables de type post attendues sont là
        if(isset($_POST['title'],$_POST['articletext'])){
            addArticle($db,$_POST);
        }
        // appel de la vue
        require_once "../view/admin.insert.html.php";
    }

} else {
    //chargement des articles pour l'accueil
    $articles = getArticlesPublished($db);
    require_once "../view/homepage.html.php";
}

