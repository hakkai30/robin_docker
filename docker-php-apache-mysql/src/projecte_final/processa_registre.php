<?php
include 'includes/dades.php';
include 'includes/funcions.php';

$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';

if ($nom && validaEmail($email)) {
  mostraMissatge("Usuari registrat correctament!");
  $usuaris[] = ["nom" => $nom, "email" => $email]; // Solo temporal
} else {
  mostraMissatge("Error: Dades incorrectes!");
}

mostraUsuaris($usuaris);
?>
<a href="index.php">Menú principal</a>








