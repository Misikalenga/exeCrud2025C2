<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC-CRUD-Procedural | Administration | Nouvel article</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body class="bg-light">
<?php
include "_menu.html.php";
?>
<h1 class="mb-4 text-center">MVC-CRUD-Procedural | Administration | Nouvel article</h1>
<div class="container">
    <div class="bg-white p-4 rounded shadow-sm mb-5">
            <h4 class="mb-3 text-left mb-3">Retour à l'administration</h4>
<p>Bienvenue sur votre espace d'administration <?=$_SESSION['username']?></p><hr>
        <h3 class="mb-3 text-left mb-3">Fomulaire d'insertion</h3>

            <div class="container">
                <div class="bg-white p-4 rounded shadow-sm mb-5">
                    <h2 class="mb-3 text-center mb-5">Ajouter un article</h2>
                    <!-- on affiche l'erreur -->
                    <?php if (isset($error) && !empty($error)): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>
                    <form action="" method="post" name="article">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="title" name="title" maxlength="160" required placeholder="Titre de l'article">
                        </div>
                        <div class="mb-3">
                            <label for="articletext" class="form-label">Texte</label>
                            <textarea class="form-control" id="articletext" name="articletext" rows="6" required placeholder="Votre texte"></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="articlepublished" name="articlepublished" value="1">
                            <label class="form-check-label" for="articlepublished">Publier ?</label>
                        </div>
                        <input type="hidden" name="iduser" value="<?=$_SESSION['iduser']?>">
                        <button type="submit" class="btn btn-primary">Envoyer</button>

                    </form>
                </div>
            </div>
        </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>