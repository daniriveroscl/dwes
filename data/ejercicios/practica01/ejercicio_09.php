<?php
    /** Repitite el ejercicio 7 añadiendo los elementos al array de uno en uno.*/

    echo "<h3>Recorrido Paises Favoritos</h3><hr>";

    echo "<h4>Elementos o paises añadidos de uno en uno</h4>";

    $paises[]= "Chile"; // Corresponde a la posición cero [0].
    $paises[]= "España";
    $paises[]= "Grecia";
    $paises[]= "Japón";

    // Recorrido mediante bucle foreach simple
    foreach ($paises as $pais){
        echo $pais . '<br><br>'; // Muestra de los elementos o paises.
    }