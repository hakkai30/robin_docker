<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Presentació de l'Estudiant</title> 
</head>
<body>
    <h1>Presentació personal</h1> 

    <?php
        // Definim les variables 
        //Asignem el nom 
        $nom = "Robin";

        //Asignem el curs
        $curs = "Desenvolupament d'aplicacions web 2";

        // Obtenim la data actual 
        $data_actual = date("d F Y");
    ?>

    <!-- Mostrar el missatge -->
    <p>Hola, sóc <strong><?php echo $nom; ?></strong> i estudio <strong><?php echo $curs; ?></strong>.</p>
    <p>Avui és <strong><?php echo $data_actual; ?></strong>.</p>

</body>
</html>
