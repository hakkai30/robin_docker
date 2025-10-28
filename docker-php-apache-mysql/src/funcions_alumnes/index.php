<?php
    include "dades.php";
    include "funcions.php";

    mostrarBenvinguda();

    foreach ($alumnes as $a) {
        mostrarFitxa($a);
    }

    // Afegir un alumne nou
    afegirAlumne($alumnes, "Pau", 7, 8, 9);

    // Mostrar alumnes amb mitjana superior a 8
    $topAlumnes = filtrarAlumnes($alumnes, 8);
    foreach ($topAlumnes as $a) {
        mostrarFitxa($a);
    }

    // Generar l'informe final de grup
    generarInforme($alumnes);
?>

