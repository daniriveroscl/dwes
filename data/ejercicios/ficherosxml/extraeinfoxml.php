<?php
     $datos = simplexml_load_file("empleados.xml"); // Carga el fichero xml
     $apellidos = $datos ->xpath("//apellidos");

     foreach ($apellidos as $apellido) {
        echo "<br>Apellido: ";
        print_r($apellido);
     }