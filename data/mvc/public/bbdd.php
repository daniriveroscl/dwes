<?php
  require "../bbddcon.php";

        $sql = "SELECT nombreusu,password FROM credenciales"; // Consulta de muestra
        $registros = $bd -> query($sql); // Ejecuta la consulta
        echo "<br>Número de registros devueltos: " . $registros->rowCount();
        if ($registros->rowCount() > 0) {
          foreach ($registros as $fila) {
            echo "<br>Nombre de usuario: " . $fila["nombreusu"];
            echo "<br>Password: " . $fila["password"]; // password tiene que ir CIFRADA SIEMPRE
          }
        }else {
            echo"<br>No se ha devuelto ningun fila";
        }


    // Insertar una nueva fila en credenciales; usuario2:error (cifrada)
    /*try {
        $bd = new PDO($dsn,$usuario,$clave);
        $sql = "SELECT nombreusu,password FROM credenciales"; // Consulta de muestra
        $registros = $bd -> query($sql); // Ejecuta la consulta
        echo "<br>Número de registros devueltos: " . $registros->rowCount();
        if ($registros->rowCount() > 0) {
          foreach ($registros as $fila) {
            echo "<br>Nombre de usuario: " . $fila["nombreusu"];
            echo "<br>Password: " . $fila["password"]; // password tiene que ir CIFRADA SIEMPRE
          }
        }else {
            echo"<br>No se ha devuelto ningun fila";
        }
    } catch (PDOException $e) {
        echo "Mensaje de la excepción: " . $e->getMessage();
    }*/
   