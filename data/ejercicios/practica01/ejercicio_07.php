<?php
    /**Construye un array con el nombre de 4 países y muestralo por pantalla.*/

    echo "<h3>Recorrido Paises Favoritos</h3><hr>";

    // Declaración de array
    $paises = ["Chile","España","Grecia","Japón"];

    // Recorrido del array mediante bucle foreach simple, mostrando sus elementos.
    foreach ($paises as $element){
        echo $element . '<br><br>';
    }