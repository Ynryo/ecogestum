<?php 
include(dirname(__FILE__, 3) . '/assets/src/files_header.php');
include(dirname(__FILE__, 3) . '/assets/src/conn.php');

$stmt = $pdo->prepare("SELECT * FROM categorie c JOIN objet o ON c.id_categorie = o.id_categorie WHERE c.id_categorie = :c");
$stmt->bindParam(':c', $_GET["c"]);
$stmt->execute();
$cat = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($cat)) {
    header('HTTP/1.0 404 Not Found');
    header('Location: /errors/404');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>EcoGestUM - <?= htmlspecialchars($cat[0]["titre_categorie"]) ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(dirname(__FILE__, 3) . '/assets/src/assets.php') ?>
    <link rel="stylesheet" href="/assets/css/search.css">
    <link rel="stylesheet" href="/assets/css/products.css">
</head>

<body>
    <?php include(dirname(__FILE__, 3) . '/assets/view/header.php') ?>
    <section class="main">
        <div class="ariane-link">
            <a href="/" class="link">Accueil</a>
            <span class="material-symbols-outlined">arrow_forward_ios</span>
            <a href="/products/" class="link">Produits</a>

            <?php if (isset($_GET["c"])): ?>
                <span class="material-symbols-outlined">arrow_forward_ios</span>
                <?= htmlspecialchars($cat[0]["titre_categorie"]) ?>
            <?php endif; ?>
        </div>

        <div class="cards-container">
            <?php if (!empty($cat)):
                foreach ($cat as $product): ?>
                    <a href="/products/?p=<?= htmlspecialchars($product["id_objet"]) ?>" class="card little">
                        <img src="/assets/img/products/<?= htmlspecialchars($product["id_objet"]); ?>_1.png" alt="<?= htmlspecialchars($product["desc_objet"]); ?>">
                        <h4><?= htmlspecialchars($product["nom_objet"]); ?></h4>
                        <p>(<?= htmlspecialchars($product["titre_categorie"]); ?>)</p>
                    </a>
                <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Aucun objet dans cette catégorie.</p>
    <?php endif; ?>
    </section>
    <?php include(dirname(__FILE__, 3) . '/assets/view/footer.php') ?>
</body>

</html>