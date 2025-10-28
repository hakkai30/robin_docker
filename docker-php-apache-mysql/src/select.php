<?php
    $servername = "db";
    $username = "user";
    $password = "password";
    $dbname = "mydb";

    // Connexió
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Connexió fallida: " . $conn->connect_error);

    $sql = "SELECT id, nom, edat FROM alumnes";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<h2>Llista d'alumnes:</h2><ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>ID: " . $row["id"] . " - Nom: " . $row["nom"] . " - Edat: " . $row["edat"] . "</li>";
            }
                echo "</ul>";
            } else {
            echo "0 resultats";
        }
    $conn->close();
?>