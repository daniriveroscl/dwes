<?php
 /*  Imprimir los números divisibles por 3 desde el 1 hasta el 10 */

 echo "<h4>Números divisibles por 3 desde el 1 hasta el 10: </h4>";

 for ($i=1; $i <= 10 ; $i++) { // Bucle iterado que recorre los números hasta el 10.
    if ($i % 3 == 0) { // Condición de si es divisible por 3.
       echo $i . "<br><br>"; // Muestra por pantalla
    }
 }