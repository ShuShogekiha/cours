<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="./webfile/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>entrainement php</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="celsius" placeholder="la zone de test que tu adore =)">
        <input type="submit" value="bouton">
    </form>


    <?php
    $yen = 141.68;
    $dollar = 1.08;

    function multiTable($nb)
    {
        for ($i = 1; $i <= 10; $i++) {
           ?><p><?php echo  $nb . " x " . $i . " = " . $nb * $i; ?><p><?php 
        }
    }
    function hello($chaine)
    {
        return "Bonjours " . $chaine;
    }

    function convFahrenheit($celsius)
    {
        return $celsius . "° fait " . $celsius * 1.8000 + 32 . "°F";
    }

    function nbTest($nb)
    {
        if ($nb >= 10) {
            $result = "Au dessus de 10";
        } else {
            $result = "En dessous de 10";
        }
        return $result;
    }

    function currencyConversion($taux, $valeur)
    {
        $converted = $taux * $valeur;
        return $converted;
    } 

    foreach ($_POST as $test) {
        ?>
        <p><?php echo multiTable($test); ?></p>
        <p><?php echo hello($test) ?></p> 
        <p><?php echo convFahrenheit($test) ?></p> 
        <p><?php echo nbTest($test) ?></p>    
        <p><?php echo currencyConversion($yen, $test); ?></p>
        <p><?php echo currencyConversion($dollar, $test); ?></p>
        <p><?php echo strlen($test); ?></p>
        <p><?php echo strtoupper($test); ?> </p> 
        <?php 
    }   

    if (str_contains($test, "beaux")) {
        ?> <p> <?php echo "oui il fait beaux"; ?> </p> <?php
    } else {
        ?> <p> <?php echo "tu raconte quoi la ??"; ?> </p> <?php
    }?>



</body>

<script src="./webfile/js/script.js"></script>

</html>