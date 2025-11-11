<?php include(dirname(__FILE__, 2) . '/assets/src/back/files_header.php') ?>
<?php
include(dirname(__FILE__, 2) . '/assets/src/back/conn.php');

$stmt = $pdo->prepare("SELECT o.id_objet, o.nom_objet, o.desc_objet, c.titre_categorie FROM OBJET AS o JOIN CATEGORIE AS c ON o.id_categorie = c.id_categorie WHERE id_objet = :id");
$stmt->bindParam(':id', $_GET["id"]);
$stmt->execute();
$objet = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>EcoGestUM - <?= htmlspecialchars($objet["nom_objet"]) ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(dirname(__FILE__, 2) . '/assets/src/back/assets.php') ?>
    <link rel="stylesheet" href="/assets/css/search.css">
</head>

<body>
    <?php include(dirname(__FILE__, 2) . '/assets/src/front/header.php') ?>
    <!-- btn retour -->
    <?php include(dirname(__FILE__, 2) . '/assets/src/front/footer.php') ?>
</body>

</html>