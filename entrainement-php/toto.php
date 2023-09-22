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
        <?php if(empty($_POST)){
            header('Location: ./index.php');
        } 
        $pattern = "/^[A-Za-zÀ-ÿ]+$/"      
        ?>

    <header>
        <?php include("./webfile/php/navbar.php") ?>
    </header> 

    <main>

        <h1> <?php echo $_POST["titre"]; ?> </h1>

        <p> <?php echo $_POST["date"]; ?> </p>

        <p> <?php echo $_POST["entete"]; ?> </p>

        <img src="C:/users/Stagiaire/download/<?php echo $_POST["imageUn"]; ?>" alt="#">

        <p> <?php echo $_POST["principal"]; ?> </p>

        <img src="<?php echo $_POST["imageDeux"]; ?>" alt="#">

        <p> <?php echo $_POST["fin"]; ?> </p>
    </main>

    <footer>
        <?php include("./webfile/php/footer.php") ?>
    </footer>
</body>

<script src="./webfile/js/script.js"></script>
</html>