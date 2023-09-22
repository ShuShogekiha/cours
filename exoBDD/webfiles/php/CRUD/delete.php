<?php
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");
if(!$_SESSION){
    header("location: ../users/views/connexUser.php");
}

if (!empty($dbh)) {

    $id = $_POST["id"];


    $requete = "DELETE FROM article WHERE id=$id";
    $exec = $dbh->query($requete);
    if($exec != false){
        echo "sa marche je crois";
    }
    $test = $exec->fetchAll(PDO::FETCH_ASSOC);

   header("location: ../../../index.php");
}
?>