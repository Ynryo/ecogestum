<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>EcoGestUM - Connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(dirname(__FILE__, 2) . '/assets/src/back/assets.php') ?>
    <link rel="stylesheet" href="/assets/css/session.css">
</head>

<body>
    <section class="login-container">
        <div class="login-box">
            <img src="/assets/img/lmu-logo.png" alt="Logo de Le Mans Université">
            <form action="/assets/src/back/login_process.php" method="POST">
                <div class="input-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button class="button blue">Connexion</button>
                <a href="/signup/" class="button blue secondary">1ère connexion</a>
                <a href="/password-loss/" class="link blue">Mot de passe oublié ?</a>
            </form>
        </div>
    </section>
    <section class="cas-background"></section>
</body>

</html>