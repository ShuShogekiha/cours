<?php
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");

if (!empty($dbh)) {

    $passCo = $_POST["pass"];
    $mailCo = $_POST["email"];
    $passCo = hash('md5',$passCo);
    $passCo = hash('sha256',$passCo);


    $roquete = "SELECT user FROM utilisateurs WHERE mail='$mailCo' AND password='$passCo'";
    $exec = $dbh->query($roquete);
    $test = $exec->fetch(PDO::FETCH_ASSOC);
    if ($test) {
        echo "l'utilisateur est ", $test["user"];
        session_start();

        $_SESSION['conn'] = TRUE;
        // var_dump($_SESSION);

    }
    header("location: ../../../..//index.php");


}
?>