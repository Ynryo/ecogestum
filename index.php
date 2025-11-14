<?php include(dirname(__FILE__, 1) . '/assets/src/files_header.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>EcoGestUM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(dirname(__FILE__, 1) . '/assets/src/assets.php') ?>
    <link rel="preload" fetchpriority="high" as="image" href="/assets/img/landing-page-background.png" type="image/png">
    <link rel="stylesheet" href="/assets/css/landing-page.css">
    <link rel="stylesheet" href="/assets/css/press-releases.css">
    <link rel="stylesheet" href="/assets/css/search.css">
    <link rel="stylesheet" href="/assets/css/boxs.css">
</head>

<body>
    <?php include(dirname(__FILE__, 1) . '/assets/view/header.php') ?>
    <?php 
    if (isset($_SESSION["user_id"])) {
        include(dirname(__FILE__, 1) . '/assets/view/landing-page-products.php');
    } else {
        include(dirname(__FILE__, 1) . '/assets/view/landing-page.php');
    } ?>
    <?php include(dirname(__FILE__, 1) . '/assets/view/footer.php') ?>
</body>

</html>