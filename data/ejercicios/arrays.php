<?php
    // Los elementos son heterogéneos
    $miArray = array(1,"hola",7.0,false);

    // Mostrar el elemento x
    echo "<br>Elemento 2 del array: " . $miArray[2];

    // Mostrar por pantalla el array entero
    // Mediante:foreach, var_dump, print_r

    // Primera forma
    foreach($miArray as $elemento) {
        echo "<br> el elemento es: " . $elemento;
    }
    // Segunda forma
    echo "<br>";
    print_r($miArray);

    // Tercera forma
    echo "<br>";
    var_dump($miArray);

    // Mostrar longitud del array
    echo "<br> La longitud del array : " . count($miArray);

    // Segunda forma de declarar un array
    $array2 = [3,2,7,9];

    // Mostrar el segundo array multiplicado
    foreach($array2 as $element) {
        $element = $element * 2;
        echo "<br> el valor del elemento es : " . $element;
    }
    echo "<br>";
    print_r($array2);

    // Insertar un nuevo elemento
    $array2 [] = 15; // Lo inserta en la última posición
    echo "<br>";
    print_r($array2);

    // Eliminar un elemento. La pos tmbn se elimina
    unset($array2[2]);
    echo "<br>";
    print_r($array2);

    // Insertar en una pos específica
    $array2 [2] = 8; 
    echo "<br>";
    print_r($array2); // Lo inserta igualmente en la última posición

    // Mostrar clave y valor del array
    echo "<br> Mostrar clave y valor del array: " ;
    foreach($array2 as $clave => $valor){
        echo"<br> Clave : " . $clave . " y el Valor: " . $valor;
    } 

    // ARRAYS INDEXADOS
    echo "<br><br>--------ARRAY INDEXADO---------";

    $persona = array(
        "edad" => 23,
        "peso" => 77,
        "dni" => "265894",
        7 => "numss",
        "casado" => false,
    );
    
    // Mostrar el array index
    foreach($persona as $key => $value) {
        echo"<br> Clave: " . $key . " y el Valor: " . $value;
    }
    echo "<br>";
    print_r($persona);

    // Insertar nuevo elemento
    $persona[] = 11;
    echo "<br>";
    print_r($persona); // En este caso solo agrega el valor.

    // Mostrar elemento individual
    echo "<br> El DNI es: " . $persona["dni"];

    // Array multidimensional (Matrices)
    echo "<br><br>--------ARRAY Multidimensional(Matriz)---------";

    $arrayM = [
        0 => [1,3],
        1 => [3,7,8],
    ];

    // Mostrar el valor específico
    echo "<br> Debe salir 3: " . $arrayM[0][1]; // Array 0, pos 1