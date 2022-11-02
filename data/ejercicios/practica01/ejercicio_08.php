<?php
    /** Repite el ejercicio 6 añadiendo los elementos al array de uno en uno.  */

    echo "<h2>Quinteto de Los Angeles Lakers</h2><hr>";
    
    echo "<h3>Elementos o jugadores añadidos de uno en uno</h3>";

    $quinteto[]= "Derek Fisher";
    $quinteto[]= "Kobe Bryant";
    $quinteto[]= "Metta World Peace";
    $quinteto[]= "Pau Gasol";
    $quinteto[]= "Andrew Bynum";

    echo "<h4>Indicando sólo los nombres</h4>";
    $jugador1 = $quinteto[0];
    $jugador2 = $quinteto[1];
    $jugador3 = $quinteto[2];
    $jugador4 = $quinteto[3];
    $jugador5 = $quinteto[4];
    echo "<ul>";
        echo "<li>$jugador1</li>";
        echo "<li>$jugador2</li>";
        echo "<li>$jugador3</li>";
        echo "<li>$jugador4</li>";
        echo "<li>$jugador5</li>";
    echo "</ul>";

    echo "<h4>Indicando la posición del nombre en el array</h4>";
    echo "<ul>";
        echo "<li>$quinteto[0]</li>";
        echo "<li>$quinteto[1]</li>";
        echo "<li>$quinteto[2]</li>";
        echo "<li>$quinteto[3]</li>";
        echo "<li>$quinteto[4]</li>";
    echo "</ul>";