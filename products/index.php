<?php include(dirname(__FILE__, 2) . '/assets/src/back/files_header.php') ?>
<?php
include(dirname(__FILE__, 2) . '/assets/src/back/conn.php');

$stmt = $pdo->prepare("SELECT o.id_objet, o.nom_objet, o.desc_objet, c.titre_categorie, c.id_categorie FROM OBJET AS o JOIN CATEGORIE AS c ON o.id_categorie = c.id_categorie WHERE id_objet = :id");
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
    <section class="main">
        <div class="ariane-link">
            <a href="/" class="link">Accueil</a>
            <span class="material-symbols-outlined">arrow_forward_ios</span>
            <a href="/products/" class="link">Produits</a>

            <?php if (isset($_GET["id"])): ?>
                <span class="material-symbols-outlined">arrow_forward_ios</span>
                <a href="/products/?c=<?= $objet["id_categorie"] ?>" class="link"><?= htmlspecialchars($objet["titre_categorie"]) ?></a>
                <span class="material-symbols-outlined">arrow_forward_ios</span>
                <?= htmlspecialchars($objet["nom_objet"]) ?>
            <?php endif; ?>
        </div>
        <div>
            <div class="img">
                <?php
                $pattern = $_SERVER["DOCUMENT_ROOT"] . "/assets/img/products/" . $_GET["id"] . '_*';
                $files = glob($pattern);
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                foreach ($files as $file):
                    if (finfo_file($finfo, $file) === 'image/png'): ?>
                        <img src="<?= htmlspecialchars($file) ?>" alt="">
                    <?php endif;
                endforeach;
                finfo_close($finfo);
                ?>
            </div>
            <div class="box">
                <h3><?= htmlspecialchars($objet["nom_objet"]) ?></h3>
                <p><?= htmlspecialchars($objet["etat"]) ?></p>
                <hr>
                <p>Couleur : <?= htmlspecialchars($objet["color"]) ?></p>
                <p>Etat : <?= htmlspecialchars($objet["etat"]) ?></p>
                <p>Taille : <?= htmlspecialchars($objet["size"]) ?></p>
                <p>Quantité : <?= htmlspecialchars($objet["quantity"]) ?></p>
                <p>Localisation : <?= htmlspecialchars($objet["localization"]) ?></p>
                <hr>
                <p><?= htmlspecialchars($objet["desc_objet"]) ?></p>
                <hr>
                <a href="" class="button blue">Réserver</a>
                <a href="" class="button blue secondary">Envoyer un message</a>
                <a href="" class="button blue secondary">Voir sur la carte</a>
            </div>
        </div>
    </section>

    </div>
    <!-- btn retour -->
    <!-- photos rename like "1_1" "1_2" (idobjet_picturenb) -->
    <?php include(dirname(__FILE__, 2) . '/assets/src/front/footer.php') ?>
</body>

</html>