<?php require "function.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Revue de code sur le traitement de formulaires</title>
    <meta name="description" content="Exercice de PHP sur les formulaires - revue de code">
</head>

<body>

    <?php
    // Si le formulaire n'a pas été envoyé (par méthode POST)
    if (empty($_POST)) { ?>
        <h1>
            <?php echo "Le formulaire n'a pas été envoyé"; ?>
        </h1>
    <?php }

    // Sinon (c'est que le formulaire a été envoyé par méthode POST)
    else {
        // Si la fonction formValidator retourne des erreurs
        if (!empty(formValidator($_POST))) { ?>
            <ul>
                <h1>Liste des erreurs</h1>
                <?php foreach (formValidator($_POST) as $champ => $erreur) { 
                    ?><li><?php echo $champ; ?></li><?php 
                    }?>
            </ul>
            <?php
        } else { 
            ?>
            <ul>
                <?php $imgPath = './uploads/' . basename($_FILES["file"]["name"]); ?>
                <img src="<?php echo $imgPath; ?>" alt="Photo de profil">
                <?php foreach ($_POST as $valeur) { 
                    ?><li><?php echo $valeur; ?></li><?php 
                    } ?>
            </ul>
        <?php }
    }
    ?>

</body>

</html>