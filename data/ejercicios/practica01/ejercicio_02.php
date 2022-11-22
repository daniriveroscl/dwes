<?php
    /* Imprimir la tabla de multiplicar del 8. Usar constante para que 
    fácilmente podamos adaptarla a otros números. */

    const CONSTANTE = 8; // Constante

    echo "<h3>Tabla de multiplicar del " . CONSTANTE . "</h3>";
    

    for ($i=1; $i <=10 ; $i++) { // Bucle iterado que proporciona los números a multiplicar y los resultados.
        
        echo "<br>" . CONSTANTE . " * " . $i . " = " . (CONSTANTE * $i) . "<br>"; // Muestra por pantalla
    }