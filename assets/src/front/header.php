<header>
    <a class="menu-button" id="menu-button">
        <span class="material-symbols-outlined">
            menu
        </span>
    </a>
    <a href="/">
        <img src="/assets/img/ecogestum-logo.png" alt="Logo de Le Mans Université">
    </a>
    <?php if (isset($_SESSION['user_id'])): ?>
        <form action="/search/" method="get" class="search-container">
            <button type="submit" class="icon">
                <span class="material-symbols-outlined">
                    search
                </span>
            </button>
            <input type="text" name="q" id="search" class="poppins" placeholder="Rechercher">
        </form>
        <a href="/logout/" class="button">Se déconnecter</a>
    <?php else: ?>
        <a href="/login/" class="button">Se connecter</a>
    <?php endif; ?>




    <!-- téléphone -->
    <div class="side-menu" id="side-menu">
        <a class="close-button" id="close-button">
            <span class="material-symbols-outlined">
                close
            </span>
        </a>
        <a href="/">
            <img src="/assets/img/ecogestum-logo.png" alt="Logo de Le Mans Université">
        </a>

        <?php if (isset($_SESSION['user'])): ?>
            <a href="/logout/" class="button">Se déconnecter</a>
        <?php else: ?>
            <a href="/login/" class="button">Se connecter</a>
        <?php endif; ?>
    </div>
    <script src="/assets/js/menu-display.js"></script>
</header>