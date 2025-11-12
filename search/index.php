<?php include(dirname(__FILE__, 2) . '/assets/src/back/files_header.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>EcoGestUM - Rechercher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(dirname(__FILE__, 2) . '/assets/src/back/assets.php') ?>
    <link rel="stylesheet" href="/assets/css/search.css">
    <link rel="stylesheet" href="/assets/css/cards.css">
</head>

<body>
    <?php include(dirname(__FILE__, 2) . '/assets/src/front/header.php') ?>
    <section class="main">
        <p>Résultats de recherche pour : <?php echo $_GET["p"]; ?></p>
        <?php
        include(dirname(__FILE__, 2) . '/assets/src/back/conn.php');

        $stmt = $pdo->prepare("SELECT o.id_objet, o.nom_objet, o.desc_objet, c.titre_categorie FROM OBJET AS o JOIN CATEGORIE AS c ON o.id_categorie = c.id_categorie WHERE nom_objet LIKE CONCAT('%', :p, '%') OR desc_objet LIKE CONCAT('%', :p, '%')");
        $stmt->bindParam(':p', $_GET["p"]);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="cards-container">
            <?php if (!empty($results)):
                foreach ($results as $product): ?>
                    <a href="/products/?id=<?= htmlspecialchars($product["id_objet"]) ?>" class="card little">
                        <img src="/assets/img/products/<?= htmlspecialchars($product["id_objet"]); ?>.png" alt="<?= htmlspecialchars($product["desc_objet"]); ?>">
                        <h4><?= htmlspecialchars($product["nom_objet"]); ?></h4>
                        <p>(<?= htmlspecialchars($product["titre_categorie"]); ?>)</p>
                    </a>
                <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Aucun résultat trouvé.</p>
    <?php endif; ?>
    </section>
    <?php include(dirname(__FILE__, 2) . '/assets/src/front/footer.php') ?>
</body>

</html>