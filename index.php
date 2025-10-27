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
    <div class="top-container">
        <?php include(dirname(__FILE__, 1) . '/assets/src/front/header.php') ?>
        <div class="top-content">
            <div>
                <h3>EcoGestUM</h3>
                <h3>Le service de recyclage <em>made in</em></h3>
                <h1 class="title">Le Mans Université</h1>
                <a href="/login/" class="button">Rejoindre</a>
            </div>
        </div>
    </div>
</body>

</html>