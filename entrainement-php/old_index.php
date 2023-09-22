<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="journal de demain">
    <link rel="stylesheet" href="./webfile/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>acceuil php</title>
</head>

<body>
    <header>
        <?php include("./webfile/php/navbar.php") ?>
    </header>

    <main>
        <h1>Nouvel Article</h1>
        <form action="./toto.php" method="POST">
            <input type="text" name="titre" placeholder="titre du nouvel article" required>
            <input type="date" name="date" required>
            <textarea name="entete" placeholder="&eacute;criver votre article" class="test" required></textarea >
            <input type="file" name="imageUn">
            <textarea name="principal" placeholder="&eacute;criver la suite de votre article" ></textarea>
            <input type="file" name="imageDeux">
            <textarea name="fin" placeholder="&eacute;criver la fin votre article"></textarea>
            <input type="submit" >
        </form>

    </main>

    <footer>
        <?php include("./webfile/php/footer.php") ?>
    </footer>

</body>

<script src="./webfile/js/scripto.js"></script>

</html>