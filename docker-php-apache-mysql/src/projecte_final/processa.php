<?php
$nom = $_POST['nom'] ?? '';
$edat = $_POST['edat'] ?? '';
$pais = $_POST['pais'] ?? '';
if ($nom && $edat) {
  echo "<p>Hola $nom, tens $edat anys i vius a $pais.</p>";
  if ($edat > 17) echo "<p>Ets major d'edat.</p>";
  else echo "<p>No ets major d'edat.</p>";
} else {
  echo "<p>Falten dades!</p>";
}
?>
<a href="index.php">Menú principal</a>


