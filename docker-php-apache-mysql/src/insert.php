<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "mydb";

// Connexió
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Inserir registre des de la URL ?nom=Pep&edat=30
$nom = filter_input(INPUT_GET, 'nom', FILTER_SANITIZE_STRING);
$edat = filter_input(INPUT_GET, 'edat', FILTER_VALIDATE_INT);

if ($nom && $edat !== false) {
    // Consulta preparada per evitar injeccions SQL
    $stmt = $conn->prepare("INSERT INTO alumnes (nom, edat) VALUES (?, ?)");
    $stmt->bind_param("si", $nom, $edat);

    if ($stmt->execute()) {
        echo "Nou alumne inserit correctament!<br>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Passa paràmetres vàlids a la URL, ex: ?nom=Joan&edat=25";
}

$conn->close();
?>
