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
        <form action="./amusement.php" method="POST">
            <input type="text" name="lName" placeholder="saisir votre nom" required>
            <input type="text" name="fName" placeholder="saisir votre prenom" required>
            <input type="email" name="mail" placeholder="saisir votre mail" required>
            <textarea name="message" placeholder="&eacute;criver votre message" class="test" required></textarea>
            <input type="submit" >
        </form>
    </main>

    <footer>
        <?php include("./webfile/php/footer.php") ?>
    </footer>

</body>

<script src="./webfile/js/scripto.js"></script>

</html>