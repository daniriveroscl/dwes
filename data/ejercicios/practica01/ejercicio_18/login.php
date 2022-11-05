<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>

  <!--lista con 3 links: Inicio, Login y Logout-->
  <ul style="list-style:none; display:inline-flex;">
    <li><a href="app_principal.php">Inicio</a></li> &nbsp;&nbsp;
    <li><a href="login.php">Login</a></li> &nbsp;&nbsp;
    <li><a href="?method=logout">Logout</a></li>
  </ul>
  <hr>

  <h2>Acceder</h2>

  <!-- Formulario Login para obtener los datos del usuario mediante Post -->
  <!-- Utiliza la función 'auth' de App.php -->
  <form action="?method=auth" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"> 

    <label for="password">Contraseña</label>
    <input type="password" name="password"> 
  
    <input type="submit" value="Enviar Datos" name="envio">
  </form>
</body>
</html>