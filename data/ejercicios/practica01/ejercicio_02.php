<?php
    /* Imprimir la tabla de multiplicar del 8. Usar constante para que 
    fácilmente podamos adaptarla a otros números. */

    $number = 8; // Variable o constante

    echo "<h3>Tabla de multiplicar del " . $number . "</h3>";
    

    for ($i=1; $i <=10 ; $i++) { // Bucle iterado que proporciona los números a multiplicar y los resultados.
        
        echo "<br>" . $number . " * " . $i . " = " . ($number * $i) . "<br>"; // Muestra por pantalla
    }