<?php
function mostraMissatge($txt) {
  echo "<p>$txt</p>";
}
function validaEmail($mail) {
  return filter_var($mail, FILTER_VALIDATE_EMAIL);
}
function mostraUsuaris($usuaris) {
  echo "<ul>";
  foreach ($usuaris as $u)
    echo "<li>".$u['nom']." - ".$u['email']."</li>";
  echo "</ul>";
}
function mostraProductes($productes) {
  echo "<table border='1'><tr><th>Nom</th><th>Preu</th><th>Categoria</th><th>Desc</th></tr>";
  foreach ($productes as $p)
    echo "<tr><td>".$p['nom']."</td><td>".$p['preu']." €</td><td>".$p['categoria']."</td><td>".$p['descripcio']."</td></tr>";
  echo "</table>";
}
?>


