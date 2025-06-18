<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC-CRUD-Procedural | Connexion</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body class="bg-light">
<?php
include "_menu.html.php";
?>
<h1 class="mb-4 text-center">MVC-CRUD-Procedural | Connexion</h1>
<div class="container">
    <div class="bg-white p-4 rounded shadow-sm mb-5">
<h3 class="mb-4 ">Tu es un C2 ?</h3>
        <h2 class="mb-4 text-center">Veuillez-vous connecter</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-white rounded shadow-sm p-4">
                        <form action="" name="login" method="post">
                            <div class="mb-3">
                                <label for="login" class="form-label">Login</label>
                                <input type="text" class="form-control" id="login" name="login" placeholder="Votre login" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="userpwd" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="userpwd" name="userpwd" placeholder="Votre mot de passe" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
</body>
</html>