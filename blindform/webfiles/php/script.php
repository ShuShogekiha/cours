<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    $userPtrn = "/^[a-zA-ZÀ-ÿ]+$/";

    $tempPath = $_FILES["file"]["tmp_name"];
    $uploadPath = "../../uploads/" . basename($_FILES["file"]["name"]);
    if(exif_imagetype($_FILES["file"]["tmp_name"]) != IMAGETYPE_JPEG){
        echo "ce n'est pas un JPEG";
    } else {
        move_uploaded_file($tempPath, $uploadPath);
    }
    ?>
    </pre>

    <?php
    ?> <img src="<?php echo $uploadPath ?>" alt="image"><?php
    foreach ($_POST as $cle => $valeur) {
        if ($cle === "fName" || $cle === "lName") {
            if (!empty(trim($valeur)) && strlen($valeur) > 1 && strlen($valeur) < 20 && preg_match($userPtrn, trim($valeur))) {
                ?><p><?php echo $valeur; ?></p><?php
            }
        } else {
            if ($cle === "twit" || $cle === "bouq" ||$cle === "zelda") {
                if (filter_var($valeur, FILTER_VALIDATE_URL)) {
                    ?><p><?php echo $valeur; ?></p><?php
                }
            }
        }
    }


    ?>
</body>

</html>