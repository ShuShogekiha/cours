<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Revue de code sur le traitement de formulaires</title>
    <meta name="description" content="Exercice de PHP sur les formulaires - revue de code">
</head>

<body>

    <?php

    //htmlentities();

    if (!empty($_POST)) {

        $userPtrn = "/^[a-zA-ZÀ-ÿ]+$/";
        $passPtrn = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])().{0,}$/";

        $fName = $_POST["user-firstname"];
        $lName = $_POST["user-lastname"];
        $mail = $_POST["user-email"];
        $somethingFishy = $_POST["user-password"];


        if (!empty(trim($fName)) && strlen($fName) > 1 && strlen($fName) < 26 && preg_match($userPtrn, trim($fName))) { ?>
            <p><?php echo "Champ nom : OK"; ?></p><?php
        } else { ?>
            <p><?php echo "Champ nom : MAL RENSEIGNÉ"; ?></p><?php
        }

        if (!empty(trim($lName)) && strlen($lName) > 1 && strlen($lName) < 26 && preg_match($userPtrn, trim($lName))) { ?>
            <p><?php echo "Champ prenom : OK"; ?></p><?php
        } else { ?>
            <p><?php echo "Champ prenom : MAL RENSEIGNÉ"; ?></p><?php
        }


        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) { ?>
            <p><?php echo "Champ mail : OK"; ?></p><?php
        } else { ?>
            <p><?php echo "Champ mail : MAL RENSEIGNÉ"; ?></p><?php
        }

        if (strlen($somethingFishy) > 7 && preg_match($passPtrn, $somethingFishy)) { ?>
            <p><?php echo "Champ mot de passe : OK"; ?></p><?php
        } else { ?>
            <p><?php echo "Champ mot de passe : MAL RENSEIGNÉ, un mot de passe doit contenir 8 caractère minimun, une MAJUSCULE, une minuscule et un chiffre pour être valable"; ?></p><?php
        }
    }
    ?>

</body>

</html>