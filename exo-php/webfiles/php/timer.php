<?php

echo date('h:i:s') . "\n";

// Stoppe pour 10 secondes
sleep(10);

// retour !
echo date('h:i:s') . "\n";
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    sleep(1);
    if($i === 9){
        header("location: ./traitement.php");
    }
}
?>