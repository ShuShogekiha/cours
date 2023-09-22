<header>
    <nav>
        <p class="logo">Do-Az</p>
        <div class="header-content">
            <div>
                <ul>
                    <li><a href="./index.php">Acceuil</a></li>
                    <li><a href="./webfiles/php/views/pageajout.php">Nouveau</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <?php
                    if ($_SESSION) {
                        ?>
                        <li><a href="./webfiles/php/users/actions/disconect.php">D&eacute;connexion</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="./webfiles/php/users/views/createUser.php">S'enregistrer</a></li>
                        <li><a href="./webfiles/php/users/views/connexUser.php">Connexion</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>