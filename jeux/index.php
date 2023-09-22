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
    use Wakfu\{Autoloader as Auto, Ecaflip as chat, Sadida as plante, Cra as arc};
    require_once('Wakfu/AutoLoader.php');
    Auto::register();
    /*
    * @param string $nom : nom de l'Ecaflip
    * @param int $hp : point de vie de l'Ecaflip
    * @param int $move : point de mouvement de l'Ecaflip
    * @param int $action : point d'action de l'Ecaflip
    * @param int $armure : armure de l'Ecaflip
    * @param string $tech : compétence de l'Ecaflip
    * @param string $equip : équipement de l'Ecaflip
    * @param int $dps : dégat de l'Ecaflip
    */

    $SupEca = new chat("Xazi", 12, 4);
    $ContrSadi = new plante("Lorsulia", 13, 3);
    $DpsCra = new arc("=)", 11, 7);

    ?>
    <div class="objects">
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
        <?php 
        $SupEca::attaque($SupEca, $ContrSadi);
        $ContrSadi::soin($DpsCra);
        ?>
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