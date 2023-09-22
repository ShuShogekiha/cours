<?php
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");
function execu($roquette)
{
    $dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");
    $exec = $dbh->query($roquette);
    return $exec->fetch(PDO::FETCH_ASSOC);
}

if (!empty($dbh)) {

    $passCo = $_POST["pass"];
    $mailCo = $_POST["email"];
    $passCo = hash('md5', $passCo);
    $passCo = hash('sha256', $passCo);



    $verif = "SELECT mail FROM utilisateurs WHERE mail='$mailCo'";
    $verify = "SELECT password FROM utilisateurs WHERE password='$passCo'";


    if (execu($verif) && execu($verify)) {
        $roquete = "SELECT user FROM utilisateurs WHERE mail='$mailCo' AND password='$passCo'";

        if (execu($roquete)) {
            session_start();
            $_SESSION['conn'] = TRUE;
        }
        header("location: ../../../..//index.php");
    } else {
        header("location: ../views/connexUser.php");
    }

}
?>