<?php
    //Mostra per pantalla els nombres del 1 al 100 que siguin parells.
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . ",";
        }
    }


    //Fes servir un bucle while per sumar els nombres de l’1 al 10.
    $sumatori = 0;
    $contador = 1;
    while ($contador <= 10) {
        $sumatori += $contador;
        $contador++;
    }
    echo "<br>La suma dels nombres de l'1 al 10 és: " . $sumatori . "<br>";

    /*Amb un foreach, mostra tots els elements d’aquest array:
    $animals = ["gos", "gat", "ocell", "peix"];*/
    $animals = ["gos", "gat", "ocell", "peix"];
    foreach ($animals as $animal) {
        echo $animal . "<br>";
    }

    //Crea un do...while que demani una edat i només acabi quan sigui superior a 18.
    do {
        $edat = rand(10, 25); // Simulem l'entrada de l'usuari amb un nombre aleatori
        echo "Edat introduïda: " . $edat . "<br>";
    } while ($edat <= 18);
?>