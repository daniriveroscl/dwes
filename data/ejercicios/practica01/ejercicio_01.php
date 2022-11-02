<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Echo y Print</title>
</head>
<body>
    <?php 
      $nombre = "Daniel";
      $apellidos = "Riveros Correa";
      $edad = 28;
      $telefono = "672745437";
      $email = "danielriveroscorrea@gmail.com";

    // Con print
      print "<h3>Con print</h3>";
      
      print "<table border=1>";
        print "<tr>";
            print "<th>Nombre</th>";
            print "<th>Apellidos</th>";
            print "<th>Edad</th>";
            print "<th>Teléfono</th>";
            print "<th>Email</th>";
        print "</tr>";
        print "<tr>";
            print "<td> " . $nombre . "</td>";
            print "<td> $apellidos </td>"; // Comillas dobles
            print "<td> " . $edad . "</td>";
            print "<td> " . $telefono . "</td>"; 
            print '<td> $email </td>'; // Comillas simples
        print "</tr>";
    print "</table><br>";


    // Con echo
      echo "<h3>Con echo</h3>";

      echo "<table border=1>";
        echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Apellidos</th>";
            echo "<th>Edad</th>";
            echo "<th>Teléfono</th>";
            echo "<th>Email</th>";
        echo "</tr>";
        echo "<tr>";
            echo '<td>  $nombre </td>'; 
            echo "<td> " . $apellidos . "</td>"; // Con puntos
            echo "<td> " . $edad . "</td>";
            echo '<td> ' , $telefono , '</td>'; // Con Comas
            echo "<td> " . $email . "</td>";
        echo "</tr>";
     echo "</table>";
    ?>
</body>
</html>


