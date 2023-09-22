<?php include_once("../../views/head.php"); ?>
<?php include_once("../../views/header.php"); ?>

<main>
    <h1>Connexion</h1>
    <form action="/webfiles/php/users/actions/scriptCo.php" method="post">
        <div>
            <label for="email">E-mail&nbsp;:</label>
            <input type="email" name="email" placeholder="E-mail" required>
        </div>
        <div>
            <label for="pass">Mot de passe&nbsp;:</label>
            <input type="password" name="pass" placeholder="Mot de passe" required>
        </div>
        <input type="submit">
    </form>
</main>

<?php include_once("../../views/footer.php"); ?>