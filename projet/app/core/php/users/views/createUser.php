<?php include_once("../../views/head.php"); ?>
<?php include_once("../../views/header.php"); ?>

<main>
    <h1>Inscription</h1>
    <form action="/webfiles/php/CRUD/ajout.php" method="post">
        <div>
            <label for="mail">E-mail&nbsp;:</label>
            <input type="email" name="mail" placeholder="E-mail" required>
        </div>
        <div>
            <label for="userName">Nom d'utilisateur&nbsp;:</label>
            <input type="text" name="userName" placeholder="Nom d'utilisateur" required>
        </div>
        <div>
            <label for="mdp">Mot de passe&nbsp;:</label>
            <input type="password" name="mdp" placeholder="Mot de passe" required>
        </div>
        <input type="submit">
        <!-- vérifier que l'email existe pas déjà et améliorer la vérification -->
    </form>
</main>