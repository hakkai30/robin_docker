<?php
// funcions.php (Fitxer base)
// --------------------------
// TODO: Implementa aquí les funcions necessàries:
// - mostrarBenvinguda()
function mostrarBenvinguda() {
    echo "<h2>Gestor d'Alumnes</h2>";
    echo "<p>Benvingut al sistema de gestió de notes.</p>";
}
// - calcularMitjana($notes)
function calcularMitjana($notes) {
    $suma = array_sum($notes);
    return round($suma / count($notes), 2);
}

// - mostrarAlumne($nom, $notes)
function mostrarAlumne($nom, $notes) {
    $mitjana = calcularMitjana($notes);
    echo "<p><strong>$nom</strong> - Mitjana: $mitjana</p>";
}

// - mostrarMissatge($nom, $text = "Bon treball!")
function mostrarMissatge($nom, $text = "Bon treball!") {
    echo "<p>$nom, $text</p>";
}

// - calcularExtrems($notes)
function calcularExtrems($notes) {
    return ["max" => max($notes), "min" => min($notes)];
}

// - formatNom($nom)
function formatNom($nom) {
    return strtoupper($nom);
}

//Crea una funció que mostri totes les dades d’un alumne utilitzant les anteriors:
function mostrarFitxa($alumne) {
    $nom = formatNom($alumne["nom"]);
    $notes = $alumne["notes"];
    $mitjana = calcularMitjana($notes);
    $extrems = calcularExtrems($notes);
    
    echo "<div style='border:1px solid #ccc; padding:10px; margin:10px;'>";
    echo "<h3>$nom</h3>";
    echo "Notes: " . implode(", ", $notes) . "<br>";
    echo "Mitjana: $mitjana<br>";
    echo "Nota màxima: {$extrems['max']} | Mínima: {$extrems['min']}<br>";
    mostrarMissatge($nom, "continua millorant!");
    echo "</div>";
}

//Extensió opcional (nivell avançat)


// 1️. Permet afegir alumnes amb nombre variable de notes (funció variàdica).
function afegirAlumne(&$llista, $nom, ...$notes) {
    $llista[] = [
        "nom" => $nom,
        "notes" => $notes
    ];
}

// 2️. Retorna només alumnes amb mitjana superior al valor indicat.
function filtrarAlumnes($llista, $minMitjana) {
    $filtrats = [];
    foreach ($llista as $alumne) {
        $mitjana = calcularMitjana($alumne["notes"]);
        if ($mitjana > $minMitjana) {
            $filtrats[] = $alumne;
        }
    }
    return $filtrats;
}

// 3️. Mostra nombre total, mitjana global i nota més alta del grup.
function generarInforme($llista) {
    $total = count($llista);
    $sumaMitjanes = 0;
    $maxNota = 0;
    foreach ($llista as $alumne) {
        $mitjana = calcularMitjana($alumne["notes"]);
        $sumaMitjanes += $mitjana;
        $extrems = calcularExtrems($alumne["notes"]);
        if ($extrems["max"] > $maxNota) $maxNota = $extrems["max"];
    }
    $mitjanaGlobal = $total ? round($sumaMitjanes / $total, 2) : 0;
    echo "<h3>Informe grup</h3>";
    echo "<p>Total d'alumnes: $total</p>";
    echo "<p>Mitjana global: $mitjanaGlobal</p>";
    echo "<p>Nota més alta del grup: $maxNota</p>";
}

?>
