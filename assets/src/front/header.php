<div class="header">
    <a href="/">
        <img src="/assets/img/ecogestum-logo.png" alt="Logo de Le Mans Université">
    </a>
    <?php if (isset($_SESSION['user'])): ?>
        <a href="/logout/" class="button">Se déconnecter</a>
    <?php else: ?>
        <a href="/login/" class="button">Se connecter</a>
    <?php endif; ?>
</div>