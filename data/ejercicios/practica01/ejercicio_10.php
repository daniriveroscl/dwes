<?php
    /** Repitite el ejercicio 6. En esta ocasión debes usar un array asociativo. 
     * Cada posición se llamará correctamente: base, escolta, alero, alapivot, pivot. 
     * Muestra el resultado con un "foreach (clave => valor)"  */

    echo "<h2>Quinteto de Los Angeles Lakers</h2><hr>";
    
    echo "<h3>Array asociativo (parejas clave-valor)</h3>";

    $quinteto = array(
            "Base" => "Derek Fisher",
            "Escolta" => "Kobe Bryant",
            "Alero" => "Metta World Peace",
            "Alapivot" => "Pau Gasol",
            "Pivot" => "Andrew Bynum"
    );

    //foreach clave->elemento
    echo "<h4>Recorrido mediante bucle foreach con posicion->elemento</h4>";
    foreach ($quinteto as $position=>$element){
        echo $position . ": " . "<b>$element</b>" . '<br><br>';
    }