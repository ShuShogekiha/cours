<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="./webfile/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Article</title>
</head>

<body>

    <header>
        <?php include("./webfile/php/navbar.php") ?>
    </header>

    <main>
        <?php
        $pattern = "/^[A-Za-zÀ-ÿ_ @.]+$/";
        if (!empty($_POST) && preg_match($pattern, trim($_POST["mail"])) && preg_match($pattern, trim($_POST["lName"])) && preg_match($pattern, trim($_POST["fName"])) && strlen($_POST["lName"]) > 1 && strlen($_POST["fName"]) > 1 && strlen($_POST["lName"]) < 25 && strlen($_POST["fName"]) < 25  && strlen($_POST["message"]) > 10 && strlen($_POST["message"]) < 2000 ){
            ?>
            <p>
                <?php echo $_POST["lName"]; ?>
            </p>

            <p>
                <?php echo $_POST["fName"]; ?>
            </p>

            <p>
                <?php echo $_POST["mail"]; ?>
            </p>

            <p>
                <?php echo $_POST["message"]; ?>
            </p>
        <?php
        } else {
            header('Location: ./index.php');
        }
        ?>

    </main>

    <footer>
        <?php include("./webfile/php/footer.php") ?>
    </footer>
</body>

<script src="./webfile/js/script.js"></script>

</html>