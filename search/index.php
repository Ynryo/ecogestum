<?php include(dirname(__FILE__, 2) . '/assets/src/back/files_header.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>EcoGestUM - Rechercher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(dirname(__FILE__, 2) . '/assets/src/back/assets.php') ?>
    <link rel="stylesheet" href="/assets/css/search.css">
</head>

<body>
    <?php include(dirname(__FILE__, 2) . '/assets/src/front/header.php') ?>
    <section class="main">
        <p>Résultats de recherche pour : <?php echo $_GET["q"]; ?></p>
        <?php
        include(dirname(__FILE__, 2) . '/assets/src/back/conn.php');

        $stmt = $pdo->prepare("SELECT o.nom_objet, c.titre_categorie FROM OBJET AS o JOIN CATEGORIE AS c ON o.id_categorie = c.id_categorie WHERE nom_objet LIKE CONCAT('%', :q, '%') OR desc_objet LIKE CONCAT('%', :q, '%')");
        $stmt->bindParam(':q', $_GET["q"]);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($results)):
            foreach ($results as $product): ?>
                <div>
                    <p><?= htmlspecialchars($product["nom_objet"]); ?> (<?= htmlspecialchars($product["titre_categorie"]); ?>)</p>
                </div>
            <?php endforeach;
        else: ?>
            <p>Aucun résultat trouvé.</p>
        <?php endif; ?>
    </section>

</body>

</html>