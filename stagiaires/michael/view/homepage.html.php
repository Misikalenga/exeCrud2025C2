<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC-CRUD-Procedural | Accueil du site</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body class="bg-light">
<?php
include "_menu.html.php";
?>
<h1 class="mb-4 text-center">MVC-CRUD-Procedural | Accueil du site</h1>
<div class="container">
    <div class="bg-white p-4 rounded shadow-sm mb-5">
<p>Bienvenue sur notre site web !</p>
        <h2 class="mb-1 text-center">Nos derniers articles</h2>

        <?php
        // pas d'articles publiés
        if(empty($articles)):
            $h3 = "Pas encore d'articles";
        else:
            $nbArticles = count($articles);
            $pluriel = $nbArticles>1? "s":"";
            $h3 = "Il y a $nbArticles article$pluriel";
        endif;
        ?>
    <h3 class="text-secondary text-center mb-5"><?=$h3?></h3>
        <?php
    foreach($articles as $article):
        ?>
        <div class="article">
            <h2><a href="?pg=article&slug=<?php echo $article['slug']; ?>"><?php echo $article['title']; ?></a></h2>
            <h3>Ecrit par <?php echo $article['username']; ?> le <?php echo $article['articledatepublished']; ?></h3>
            <p><?php echo $article['articletext']; ?>... <a href="?pg=article&slug=<?php echo $article['slug']; ?>">Lire la suite</a></p>

        </div>
        <?php
    endforeach;
        ?>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>