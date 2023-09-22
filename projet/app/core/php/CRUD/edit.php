<?php
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");
if(!$_SESSION){
    header("location: ../users/views/connexUser.php");
}

if (!empty($dbh)) {

    $nomArt = $_POST["desi"];
    $prixArt = $_POST['price'];
    $ulrArt = $_POST['link'];

    $idArt = $_POST["id"];

    $requete = "UPDATE article
    SET designation='$nomArt', img='$ulrArt', prix=$prixArt
    WHERE id=$idArt";
    $exec = $dbh->query($requete);

   header("location: ../../../index.php");
}
else{
    echo "connexion echoué";
}?>