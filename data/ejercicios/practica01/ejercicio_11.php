<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Libro</title>
 </head>
 <body>
 <!-- Crea un formulario para enviar los datos de registro 
      de un libro: título, autor, editorial, páginas.  -->
      <form action="11action.php" method="post">
        <fieldset>    
            <legend><b>DATOS DE REGISTRO DE LIBRO</b></legend>
        <p> 
            <label for="titulo">Título</label>
            <input type="text" name="titulo"><br><br>

            <label for="autor">Autor</label>
            <input type="text" name="autor"><br><br>

            <label for="editorial">Editorial</label>
            <input type="text" name="editorial"><br><br>

            <label for="paginas">Páginas</label>
            <input type="number" name="paginas"><br><br>

            <input type="submit" value="Enviar Datos">
        </p>
        </fieldset>
      </form>
 </body>
 </html>

