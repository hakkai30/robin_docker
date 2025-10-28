<?php
// 1. Definició de variables
$nom = "Laura";
$edat = 22;
$saldo = 134.75;
$nivell_usuari = "premium"; // pot ser "bàsic", "premium" o "admin"
$connectat = true;
$oferta_activada = false;
$missatge = "Benvinguda";

// 2. Interpolació i concatenació
echo "<h2>$missatge, $nom!</h2>";                              
echo "<p>El teu saldo actual és de " . $saldo . " €.</p>";     

// 3. Condicions segons l’edat
if ($edat < 18) {
    echo "<p>Accés restringit: cal ser major d’edat.</p>";
} elseif ($edat >= 18 && $edat <= 65) {
    echo "<p>Accés complet a totes les funcions.</p>";
} else {
    echo "<p>Mode sènior activat.</p>";
}

// 4. Switch per nivell d’usuari Utilitza un switch per mostrar missatges segons $nivell_usuari: 
switch ($nivell_usuari) {
    case "bàsic":
        echo "<p>Tens accés limitat al contingut.</p>";
        break;
    case "premium":
        echo "<p>Gaudeix del contingut exclusiu Premium!</p>";
        break;
    case "admin":
        echo "<p>Accés total al panell d’administració.</p>";
        break;
    default:
        echo "<p>Nivell desconegut.</p>";
}

// 5. Operadors lògics i ternari
$oferta_activada = ($saldo > 100 && $connectat);
echo $oferta_activada? "<p>Oferta especial activada!</p>": "<p>Sense ofertes disponibles.</p>";

// 6. Funció i àmbit de variables
function mostrarSalutacio() {
    global $nom;
    echo "<p>Hola de nou, $nom!</p>";
}
mostrarSalutacio();

// 7. Conversions de tipus
$text_numerico = "50.99";
$valor_int = (int)$text_numerico;
$valor_float = (float)$text_numerico;

echo "<p>Valor original: \"$text_numerico\"</p>";
echo "<p>Com a int: ";
var_dump($valor_int);
echo "</p>";
echo "<p>Com a float: ";
var_dump($valor_float);
echo "</p>";
?>
