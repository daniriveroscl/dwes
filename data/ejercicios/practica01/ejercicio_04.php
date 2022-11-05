<?php
    /* Imprimir los primeros 10 números de la sucesión de fibonacci. 
    La sucesión comienza con los números 0 y 1; 2​ a partir de estos, 
    «cada término es la suma de los dos anteriores» */
    
    // Variables iniciales
    $num1 = 0;
    $num2 = 1;
    $contador = 0;

    echo "<h4>Primeros 10 números de la sucesión de fibonacci: </h4>";

    while ($contador < 10){ 
        for ($i=1; $i <= 10 ; $i++) { // Bucle anidado que muestra los primeros 10 números de fibonacci.
            echo  $i . ". " . "<b>$num1</b>" . "<br>";
            $num3 = $num2 + $num1; // Cada término es la suma de los dos anteriores
            $num1 = $num2;
            $num2 = $num3;
            $contador++; // El contador se va incrementado de uno en uno.
        } 
    }
?>