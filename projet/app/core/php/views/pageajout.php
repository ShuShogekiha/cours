<?php
include_once("./head.php");
include_once("./header.php");
if (!$_SESSION) {
    header("location: ../users/views/connexUser.php");
}
$dbh
    ?>

<main>
    <h1>Nouvelle article</h1>
    <form action="./webfiles/php/CRUD/ajout.php" method="POST">
        <div>
            <label for="desi">Nom de l'article&nbsp;:</label>
            <input type="text" name="desi" placeholder="nom de l'article">
        </div>
        <div>
            <label for="price">Prix de l'article&nbsp;:</label>
            <input type="text" name="price" placeholder="prix de l'article">
        </div>
        <div>
            <label for="link">Lien d'image de l'article&nbsp;:</label>
            <input type="url" name="link" placeholder="lien d'image de l'article">
        </div>
        <input type="submit">
    </form>
</main>


<?php include_once("./footer.php"); ?>