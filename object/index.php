<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="voiture">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="stylee.css">
    <title>object</title>
</head>

<body>
    <?php
    use InitiationPOO\Classes\{Voiture as V, Avion as A, Autoloader as Auto};
    use InitiationPOO\Classes\Wakfu\{Ecaflip as chat, Sadida as plante, Cra as arc};


    require_once('InitiationPOO/Classes/AutoLoader.php');
    Auto::register();


    // $VRouge = new V("Renault", "rouge", 110);
    // $VJaune = new V("Citroen", "jaune", 90);
    // $VBleue = new V("Peugeot", "bleu", 140);
    // $VViolet = new V("Ferrari", "violet", 200);
    //$CPedro = new C("Benpo", "Pedro", 51);
    //$CLar = new C("Us", "Lar", 18);
    // $ABleue = new A("boing", 800, "bleue");
    // $AViolet = new A("Avion", 1600, "violet");
    $SupEca = new chat("Xazi");
    $ContrSadi = new plante("Lorsulia");
    $DpsCra = new arc("=)");


    //$Valider = Vali::checkEntier(5);
    ?>

    <div class="objects">
        <!-- <div class="object">
            <?php
            // echo $VRouge;
            // echo $VViolet;
            ?>
        </div> -->
        <!-- <div class="object">
            <?php
            //echo $CPedro;
            //echo $CLar;
            ?>
        </div> -->
        <!-- <div class="object">
            <?php
            // echo $ABleue->trajet("New York");
            // echo $ABleue->trajet("tokyo");
            // echo $ABleue->trajet("bagdad");
            // echo $AViolet->trajet("Los Angeles");
            ?>
        </div> -->
        <!-- <div class="object">
            <?php
            //echo $Valider;
            ?>
        </div> -->
        <div>
            <?php
            echo $SupEca;
            ?>
        </div>
        <div>
            <?php
            echo $ContrSadi;
            ?>
        </div>
        <div>
            <?php
            echo $DpsCra;
            ?>
        </div>
    </div>

</body>
<script src="#" defer></script>

</html>