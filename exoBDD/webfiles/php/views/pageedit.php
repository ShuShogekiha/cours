<?php 
include_once("./head.php"); 
include_once("./header.php"); 
if(!$_SESSION){
    header("location: ../users/views/connexUser.php");
}
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");

if (!empty($dbh)) {
    $id = $_POST["id"];
}
?>



<main>
    <h1>Modifier</h1>
    <form action="./webfiles/php/edit.php" method="POST">
        <div>
            <label for="desi">Nom a modifier&nbsp;:</label>
            <input type="text" name="desi" placeholder="nom a modifier">
        </div>
        <div>
            <label for="price">Prix a modifier&nbsp;:</label>
            <input type="text" name="price" placeholder="prix a modifier">
        </div>
        <div>
            <label for="link">Lien d'image a modifier&nbsp;:</label>
            <input type="url" name="link" placeholder="lien d'image a modifier">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit">
    </form>
</main>


<?php include_once("./footer.php"); ?>