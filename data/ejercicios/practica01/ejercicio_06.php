<?php
/**Construir un array con el quinteto inicial de un equipo de basket. 
 * Construyelo usando "array()" y usando "[]". 
 * Imprimir dicho quinteto usando etiquetas "ul" y "li". 
 * 
 * Imprimelo de dos modos distintos:
a) Indicando sólo los nombres. 
b) Indicando la posición del nombre en el array (0, 1, 2, ...).  */

echo "<h2>Quinteto de Los Angeles Lakers</h2><hr>";

$quinteto = ["Derek Fisher","Kobe Bryant","Metta World Peace","Pau Gasol" ,"Andrew Bynum"];
$quinteto =  array("Derek Fisher","Kobe Bryant","Metta World Peace","Pau Gasol" ,"Andrew Bynum");

echo "<h4>Indicando sólo los nombres</h4>";
$jugador1 = $quinteto[0];
$jugador2 = $quinteto[1];
$jugador3 = $quinteto[2];
$jugador4 = $quinteto[3];
$jugador5 = $quinteto[4];
echo "<ul>";
    echo "<li>$jugador1</li>";
    echo "<li>$jugador2</li>";
    echo "<li>$jugador3</li>";
    echo "<li>$jugador4</li>";
    echo "<li>$jugador5</li>";
echo "</ul>";

echo "<h4>Indicando la posición del nombre en el array</h4>";
echo "<ul>";
    echo "<li>$quinteto[0]</li>";
    echo "<li>$quinteto[1]</li>";
    echo "<li>$quinteto[2]</li>";
    echo "<li>$quinteto[3]</li>";
    echo "<li>$quinteto[4]</li>";
echo "</ul>";