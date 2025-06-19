<?php
# controller/PrivateController.php
require_once "../model/ArticleModel.php";
require_once "../model/UserModel.php";

if(isset($_GET['pg'])){
        // déconnexion
    if($_GET['pg']==="logout") {
        // appel de la fonction de déconnexion qui DOIT
        // nous envoyer un booléen (on s'assure de la synchronicité)
        // de base de PHP (voir https://amphp.org/ ou https://reactphp.org/http/) / ou problème de surcharge réseau
        if(disconnectUser())
            // redirection
            header("Location: ./");
            exit();
        // page à propos
    }elseif($_GET['pg']==="about"){

        // appel de la vue
        require_once "../view/about.html.php";
    }elseif($_GET['pg']==="admin"){
        //chargement des articles pour l'accueil
        $articles = getArticlesPublished($db);
        // appel de la vue
        require_once "../view/admin.homepage.html.php";
    }

}else{
    //chargement des articles pour l'accueil
    $articles = getArticlesPublished($db);
    require_once "../view/homepage.html.php";
}

