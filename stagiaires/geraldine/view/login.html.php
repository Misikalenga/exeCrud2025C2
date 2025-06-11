<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="./">Accueil</a></li>
        <li><a href="./?pg=login">Connexion</a></li>
    </ul>
</nav>

    <h1>Login</h1>
    <div id="content">
<p>Veuillez vous connecter</p>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Votre login" required><br>
        <input type="password" name="userpwd" placeholder="Votre mot de passe" required><br>
        <input type="submit" value="Se connecter">
    </form>

    </main>
<div class="container">
    <div class="row">

        <div class="col-lg-12">


            <!-- Blog Posts Section -->
            <section id="blog-posts" class="blog-posts section">

                <div class="container">

                    <div class="row gy-4">
                        <div>
                            <?php if(isset($error)): ?>
                            <h3 class="alert alert-danger"><?=$error?></h3>
                            <?php
                            endif;
                            ?>
                            <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="user_login" class="form-control" placeholder="votre login" required>
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="password" class="form-control" name="user_pwd" placeholder="Votre mot de passe" required>
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="submit" value="Se connecter">
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>