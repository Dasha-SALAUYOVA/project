<header>
        <nav class="projet">
            <ul classe="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="content.php">GameRoom</a></li>
            <li><a href="formulaire.php">Connection</a></li>

            <?php if (isset($_SESSION['isConnected'])): ?>
                <li style="color: orange"><b>Bonjour, <?= ucfirst($_SESSION['name']) ?> !</b></li>
                <a href="controllers/logout.php">Se déconnecter</a>
            <?php else: ?>
                <a href="formulaire.php"></a>
            <?php endif ?>

            </ul>
        </nav>
</header>
