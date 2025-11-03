<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>EcoGestUM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(dirname(__FILE__, 1) . '/assets/src/back/assets.php') ?>
    <link rel="preload" fetchpriority="high" as="image" href="/assets/img/landing-page-background.png" type="image/png">
    <link rel="stylesheet" href="/assets/css/landing-page.css">
    <link rel="stylesheet" href="/assets/css/press-releases.css">
</head>

<body>
    <section class="top-container">
        <?php include(dirname(__FILE__, 1) . '/assets/src/front/header.php') ?>
        <div class="top-content">
            <div>
                <h3 class="poppins">EcoGestUM</h3>
                <h3 class="poppins">Le service de recyclage <em>made in</em></h3>
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
        <h3>Ils parlent de nous</h3>
        <div class="scroller">
            <div class="cards-container">
                <!-- A faire en php -->
                <div class="card">
                    <img src="/assets/img/portraits/theo.png" alt="Portrait de Théo">
                    <div>
                        <h4>Théo M., étudiant à l’ENSIM</h4>
                        <p>Le concept de EcoGestUM est incroyable. Il m'a permis de donner mon ordinateur à une autre personne au lieu de le jeter.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/portraits/jade.png" alt="Portrait de Jade">
                    <div>
                        <h4>Jade, enseignante en Fac de Droit</h4>
                        <p>Grâce à EcoGestUM, j’ai pu récupérer du matériel pédagogique pour mes cours, tout en participant à une démarche écoresponsable.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/portraits/romain.png" alt="Portrait de Romain">
                    <div>
                        <h4>Romain, étudiant en Fac de Sciences</h4>
                        <p>Je trouve l’application très intuitive, et elle facilite vraiment le tri et la réutilisation des objets à l’université.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/portraits/ines.png" alt="Portrait de Inès">
                    <div>
                        <h4>Inès, étudiante à l’IUT de Laval</h4>
                        <p>J'ai été ravi de pouvoir proposer des livres que je n'utilisais plus à d'autres étudiants, le tout via EcoGestUM.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/portraits/thomas.png" alt="Portrait de Thomas">
                    <div>
                        <h4>Thomas, étudiant à l’ENSIM</h4>
                        <p>C'est une belle initiative pour limiter le gaspillage et encourager la mutualisation des ressources sur le campus.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/portraits/lea.png" alt="Portrait de Léa">
                    <div>
                        <h4>Léa, étudiante en Fac de Lettres</h4>
                        <p>EcoGestUM m'a aidé à trouver un équipement sportif en très bon état, tout en faisant un geste pour l’environnement.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/portraits/maxime.png" alt="Portrait de Maxime">
                    <div>
                        <h4>Maxime, enseignant à l’IUT du Mans</h4>
                        <p>J’apprécie le fait qu’EcoGestUM propose une alternative durable pour se débarrasser de ses affaires, tout en favorisant les échanges entre membres de la communauté universitaire.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carrousel-controller">
            <a href="" class="button">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
            </a>
            <a href="" class="button">
                <span class="material-symbols-outlined">
                    arrow_forward
                </span>
            </a>
        </div>
    </section>
    <section class="press-releases">
        <h2>Communiqués de la direction de l’Université</h2>
        <!-- A faire en php -->
        <div class="pr-container alone">
            <div class="top-content">
                <div class="publisher">
                    <h3>Delphine LETORT</h3>
                    <span class="role president"></span>
                </div>
                <div class="timedate">
                    <span>19/09/2025</span>
                    <span>&#x2022</span>
                    <span>19h45</span>
                </div>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet. A consectetur placeat vel perspiciatis quibusdam vel iste voluptatum ex dicta ipsam qui doloremque eligendi ea deserunt laboriosam. Quo quasi officiis et odio architecto et velit voluptas et corrupti doloremque ab iste esse et earum veniam et expedita laborum.
                <br><br>
                Ab accusamus voluptatem et reprehenderit dolor et enim commodi ut internos recusandae nam nobis velit. Hic ducimus nisi et internos quia et aperiam aperiam est dolores omnis. Eum itaque libero cum consequuntur dolore et mollitia saepe ut voluptatem dicta ea ipsa galisum sed voluptates voluptatibus.
                <br><br>
                Et vero nesciunt aut voluptates maiores et vitae quas ut vero iusto sed corrupti itaque ut dolore quibusdam aut porro eveniet. Rem rerum odit quo rerum consectetur et architecto provident aut voluptatem incidunt et debitis voluptatum est omnis eligendi. Non odit magnam rem quis quis ut corporis facilis non officiis blanditiis.
            </div>
        </div>
        <a href="/press-releases/" class="button">Voir plus de communiqués</a>
    </section>
    <?php include(dirname(__FILE__, 1) . '/assets/src/front/footer.php') ?>
</body>

</html>