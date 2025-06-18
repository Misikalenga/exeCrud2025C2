<?php
# controller/PublicController.php
require_once "../model/ArticleModel.php";
require_once "../model/UserModel.php";

if(isset($_GET['pg'])){
    if($_GET['pg']==="login"){
        // ici tentative de connexion
        if(isset($_POST['login']) && isset($_POST['userpwd'])){
            // si c'est le bon utilisateur
            if(connectUser($db,$_POST['login'],$_POST['userpwd'])){
                echo "ok";
            }else{
                echo "ko";
            }
        }

        // appel de la vue
        require_once "../view/login.html.php";
    }elseif($_GET['pg']==="about"){

        // appel de la vue
        require_once "../view/about.html.php";
    }
}else {
    //chargement des articles pour l'accueil
    $articles = getArticlesPublished($db);
    require_once "../view/homepage.html.php";
}