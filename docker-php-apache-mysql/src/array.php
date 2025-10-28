<?php
    //Crea un array amb cinc ciutats i mostra-les en llistat HTML (<ul><li>).
        $ciutats = ["Barcelona", "Madrid", "València", "Sevilla", "Bilbao"];
        echo "<ul>";
        foreach ($ciutats as $ciutat) {
            echo "<li>" . $ciutat . "</li>";
        }
        echo "</ul>";

    //Crea un array associatiu amb dades d’un alumne i mostra-les en format “clau: valor”.
        $alumne = [
            "Nom" => "Robin",
            "Edat" => 24,
            "Curs" => "DAW",
            "Escola" => "ETP Xavier"
        ];
        foreach ($alumne as $clau => $valor) {
            echo $clau . ": " . $valor . "<br>";
        }

    //Afegeix tres persones a un array multidimensional i mostra’n els noms i edats.
        $persones = [
            ["Nom" => "Mike", "Edat" => 24],
            ["Nom" => "Guillem", "Edat" => 24],
            ["Nom" => "Albert", "Edat" => 28]
        ];
        foreach ($persones as $persona) {
            echo "Nom: " . $persona["Nom"] . ", Edat: " . $persona["Edat"] . "<br>";
        }

    //Fes servir implode() per convertir un array d’aficions en una frase.
        $aficions = ["futbol", "bàsquet", "videojocs", "cinema"];
        $frase = "Les meves aficions són: " . implode(", ", $aficions) . ".";
        echo $frase;

    //Crea una funció que rebi un array d’edats i retorni la mitjana.
        function calcularMitjana($edats) {
            $suma = array_sum($edats);
            $quantitat = count($edats);
            return $quantitat > 0 ? $suma / $quantitat : 0;
        }

        $edats = [20, 22, 24, 26, 28];
        $mitjana = calcularMitjana($edats);
        echo "<br>La mitjana d'edats és: " . $mitjana;
?>