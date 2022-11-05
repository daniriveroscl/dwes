<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
       <!-- Menú con 3 links, Indice, login y logout -->
    <ul style="list-style:none; display:inline-flex;">
        <li><a href="indice.php">Inicio</a></li>&nbsp;&nbsp;
        <li><a href="login.php">Login</a></li>&nbsp;&nbsp;
        <li><a href="?method=logout">Logout</a></li>
    </ul>
    <hr>
    <h2>Tu lista de deseos:</h2>
    
    <?php

      /* Si la cookie está creada entonces la lee, decodifica en json y la convierte en un array asociativo.
       Muestra el array en una lista. */
      if(isset($_COOKIE["listaDeseo"])){  

        echo "<ul>";        
        $lista = json_decode($_COOKIE["listaDeseo"],true);        
                
        foreach($lista as $deseo){
          echo "<li>". $deseo . "</li><br>";
        }
        echo "</ul>";                 
      }     
    ?>


    <!-- Formulario que envia a la función 'new' un objeto nuevo 
    cuando se pulsa el botón "Enviar" -->
    <form action="?method=new" method="post">
      <label for="nuevoDeseo">Inserta un nuevo deseo: </label>
      <input type="text" name="nuevoDeseo" id="nuevoDeseo" required>
             
      <input type="submit" value="Agregar" name="envio">
    </form>

    <!-- Formulario que envia a la función 'delete' el deseo que quiera eliminiar
   cuando se pulsa el botón "Eliminar" -->
    <form action="?method=delete" method="post">
      <label for="borrarDeseo">Borra un deseo: </label>
      <input type="text" name="borrarDeseo" id="borrarDeseo">
      
      <input type="submit" value="Eliminar" name="borrar">
    </form>

    <!-- Formulario que envía a la función 'empty' y vacía la lista de deseos
    cuando se pulsa el botón "Borrar Deseos"-->
    <form action="?method=empty" method="post">      
      <br><input type="submit" value="Borrar Deseos" name="eliminar">
    </form>

  </body>
</html>