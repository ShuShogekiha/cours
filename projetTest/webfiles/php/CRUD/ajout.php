<?php
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");
function execu($roquette)
{
    $dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");
    $exec = $dbh->query($roquette);
    return $exec->fetch(PDO::FETCH_ASSOC);
}

if (!empty($dbh)) {
    if ($_POST["desi"]) {
        if (!$_SESSION) {
            header("location: ../users/views/connexUser.php");
        }
        $nomArt = $_POST["desi"];
        $prixArt = $_POST['price'];
        $ulrArt = $_POST['link'];

        $requete = "INSERT INTO article (designation, img, prix)
        VALUES ('$nomArt', '$ulrArt', $prixArt);";
        execu($requete);
        // header("location: ../../../index.php");

    } else {
        $mailUser = $_POST["mail"];
        $userUser = $_POST['userName'];
        $passUser = $_POST['mdp'];
        $passUser = hash('md5', $passUser);
        $passUser = hash('sha256', $passUser);

        $verif = "SELECT mail FROM utilisateurs WHERE mail='$mailUser'";
   
        if (!execu($verif)) {
            $requete = "INSERT INTO utilisateurs (mail, user, password)
            VALUES ('$mailUser', '$userUser', '$passUser');";
            execu($requete);
            header("location: ../../../index.php");
        }else{
            echo $verif;
            header("location: ../users/views/createUser.php");
        }
    }
} else {
    echo "connexion echoué";
} ?>