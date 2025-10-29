<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>EcoGestUM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(dirname(__FILE__, 1) . '/assets/src/back/assets.php') ?>
    <link rel="stylesheet" href="/assets/css/landing-page.css">
</head>

<body>
    <section class="top-container">
        <?php include(dirname(__FILE__, 1) . '/assets/src/front/header.php') ?>
        <div class="top-content">
            <div>
                <h3>EcoGestUM</h3>
                <h3>Le service de recyclage <em>made in</em></h3>
                <h1 class="title">Le Mans Université</h1>
                <a href="/login/" class="button">Rejoindre</a>
            </div>
        </div>
    </section>
    <section class="keynums">
        <div class="blue-bg">
            <h1>18.054</h1>
            <p>objets déjà recyclés</p>
        </div>
        <div class="red-bg">
            <h1>1.569</h1>
            <p>objets disponibles actuellement</p>
        </div>
        <div class="green-bg">
            <h1>19.058</h1>
            <p>tonnes équivalent CO2 économisés chaque année</p>
        </div>
    </section>
    <section class="they-speak">
        <h2>Ils parlent de nous</h2>
        <div class="cards-container">
            <!-- A faire en php -->
            <div class="card">
                <img src="/assets/img/portraits/theo.png" alt="Portrait de Théo">
                <h3>Théo M., étudiant à l’ENSIM</h3>
                <p>Le concept de EcoGestUM est incroyable. Il m'a permis de donner mon ordinateur à une autre personne au lieu de le jeter.</p>
            </div>
        </div>
    </section>
    <section class="press-releases">
        <h2>Communiqués de la direction de l’Université</h2>
        <!-- A faire en php -->
         <a href="/press-releases" class="button">Voir plus de communiqués</a>
    </section>
    <?php include(dirname(__FILE__, 1) . '/assets/src/front/footer.php') ?>
</body>

</html>