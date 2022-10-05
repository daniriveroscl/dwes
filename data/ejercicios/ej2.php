<?php

$var1 = 5;
$var2 = "7";
//$var2 = (int) "7";

$var3 = (string)8;
$var4 = "";
$var5;

// comentario de una línea

//notacion de las variables
// $camelCase numeroPrimo

    // método gettype para declarar el tipo
    echo "Var1 es del tipo : " . gettype($var2); // punto para concatenar

    // método isset para ver si está definida
    echo "<br><br>La variable 3 esta definida: ?" . isset($var3) . "<br>";
    echo "La variable 4 esta definida: ?" . isset($var4);

    // método empty para saber si la variable está vacía
    echo "<br><br>La variable 3 esta vacia: ?" . empty($var3) . "<br>";
    echo "La variable 4 esta vacia: ?" . empty($var4);

    const MICONST = 100;

    define ('OTRACONST', 200);
    echo "<br> la constante es : " . MICONST;

    $num1 = 3;
    $num2 = 7;

    if($num1 === $num2) {   // === para identificar dos variables con mismo dato y mismo tipo de dato
        echo "Son iguales";
    }
    else {
        echo "<br> Son diferentes";
    }



/* 
    variables: [A-Z,a-z,0-9] 
        - No pueden comenzar con numeros, ni caracteres especiales, excepto el guión bajo _ pero no se recomienda.

        Casesensitive: distinguir mayus de minus.
            JAVA: Sí lo es
            PHP: a medias:
                - las variables:sí
                    $MIVAR diferente $mivar
                - Los métodos: no
                    METODO1 = metodo1 = Metodo1
    ---------------------
    TIPOS DE DATOS:
        int, string, boolean, float
        arrays, objetos, ficheros

        Tipado de lenguaje de programación:
            - Fuerte: Java (Se deben declarar las variables)
            - Débil: PHP (No hace falta, lo deduce)
    
    OPERADORES
    ----------------
    = , < ,> ... != , <>, == , === , <=>

    if (){} ; if(){}else{}...

    Inclusión de código de un fichero en otro:
    include, include_once, require, 
*/