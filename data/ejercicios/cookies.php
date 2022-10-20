<?php
    // Para guardar los datos o preferencias del cliente.
    // Ya que el protoclo http no tiene estado (sin memoria).
    // Se guardan en el cliente

    // time() = strtotime(now()). Devuelve el tiempo actual en segundos (desde 1970)

    // Definir una cookie. 
    // Se pone siempre primero antes de imprimir algo por pantalla, ya que va en la cabecera.

         // Definir cookie como Array
         $miArray = ['a' => "hey",'b'=> 27,'c'=>[1,3,7]];
         $inforguarfar = serialize($miArray);

         /* en JSON
         
         $infojson = json_encode($miArray);
         echo "<br>Codificación del array en JSON: " . $infojson;

         $micad = '{a'
         $infojson = json_decode($miArray);
         echo "<br>Descodificación del array en JSON: ";
         
         echo "<br>info en json " . $infojson;*/

    setcookie("primeracookie",$inforguarfar,time()+300); //  strtotime() duración cookie 300 segundos
    setcookie("segundacookie","aceptada",time()+600);

    echo "<h1>Mis primeras cookies</h1>";
    echo "Valor de la cookie uno: " . $_COOKIE["primeracookie"]; // Acceder al valor de esa cookie
    echo "<pre>";
    echo "<br>Valor de cookie 2: ";
    var_dump($_COOKIE["segundacookie"]);
    // var_dump(unserialize($_COOKIE["segundacookie"])); // Mostrar por pantalla esa segunda cookie

    echo "<br>Número de cookies creadas: " . count($_COOKIE);
    

    // Borrar cookie

    /* setcookie("primeracookie","aceptado",time()-120);
    echo "<h1>Mi primera cookie eliminada</h1>"; */

