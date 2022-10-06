<?php

    // Variables Globales
    $var1 = 6;
    $var2 = 7;

    function suma($a, $b) {
        global $var1;   // Para utilizarlas dentro de una función.
        global $var2;
        $var1 = 100;
        $var2 = 102;

        unset($var2); // Borrar variable

        echo "<br>La variable DENTRO de la función 1 y 2 son : " . $var1 . " y " . $var2;

        // Definición variables estáticas  
        static $varestatica = 0;
        echo "<br>El valor de la variable estática es: " . $varestatica;
        $varestatica++;

        return $a + $b; // Variables locales de la función
    }

    echo "<br>La variable a y b son : " . $a . " y " .$b; // No muestran nada ya que están fuera de la función.
    echo "<br>La variable 1 y 2 FUERA de la función son : " . $var1 . " y " .$var2;

    // Resultados var estática
    echo "<br>Llamada a suma 1 vez: " . suma(3,5); // Aunque salga de la función el valor PERMANECE
    echo "<br>Llamada a suma 2 vez: " . suma(3,5);
    echo "<br>Llamada a suma 3 vez: " . suma(3,5);


    // Paso de parámetros por valor o por referencia (variable) OPCIONAL
    function restar(&$var3, $var4) {
        $var3--; 
        echo "<br> var 3 vale: " . $var;
    }

    $var3 = 8;
    $var4 = 3;

    echo "<br>Llamada por valor: " . restar($var3,6);

   