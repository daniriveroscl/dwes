<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style></style>
  <title>Login</title>
</head>
<body>
    <!-- Menú con 3 links, Indice, login y logout -->
    <ul style="list-style:none; display:inline-flex;">
         <li><a href="indice.php">Inicio</a></li>&nbsp;&nbsp;
         <li><a href="login.php">Login</a></li>&nbsp;&nbsp;
         <li><a href="?method=logout">Logout</a></li>
     </ul>
     <hr>
  <h2>Datos de Acceso:</h2>

  <!-- Formulario para obtener los datos de usuario mediante Post -->
  <!-- Llama a la función 'auth' de App.php -->
  <form action="home.php" method="post">
    <label for="nombre">Nombre </label>
    <input type="text" name="nombre" id="nombre"> 
 
    <label for="password">Contraseña </label>
    <input type="password" name="password"> 
  
    <input type="submit" value="Enviar Datos" name="envio">
  </form>
</body>
</html>