<?php
    /* Dado un número por constante, por ejemplo el 169 o 193, 
    mostrar la lista de todos sus divisores. Si no los hay decir 
    que el número es primo. */

    $num = 10; // Variable de prueba

    echo "<h4>Divisores del número " . "$num :</h4>";

    // Muestra los divisores si los tiene
    for ($i=2; $i < $num ; $i++) { 
        if ($num % $i == 0) {
           echo $i . "<br>";
        } 
    }

    // Función 'comprobarPrimo' para saber si es primo (solo se puede dividir por uno o él mismo).
    function comprobarPrimo($number){
        if ($number == 1)
        return 0;
        for ($i = 2; $i <= $number/2; $i++){
            if ($number % $i == 0)
                return 0; // No es primo.
        }
        return 1; // Función booleana que si es 1 (true) entonces devuelve primo.
    }
    
    // Nos confirma si es primo usando la función.
    $primo = comprobarPrimo($num);
    if ($primo == 1)
        echo "Es <b>Primo</b> (No tiene divisores).";

