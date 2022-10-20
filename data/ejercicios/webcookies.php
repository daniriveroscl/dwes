<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de cookies</title>
</head>
<body>
    <!--Crear web en la que selecciones entre 3 idiomas: español, inglés y alemán
    y selecciones una marca de coche preferida y muestre el siguiente mensaje:
        
        Bienvenido querido usuario.
        Welcome dear user
        Willkommen lieber Benutzer.
        
        y la marca de coche seleccionada

    Esta información se debe guardar en cookies
    Si no se selecciona idioma, por defecto será español.-->

    <form name="formucookies" action="autoriza_cookies.php" method="post">
        <p>Selecciona idioma:</p>
        <p> 
            <label for="espanol">Español</label>
            <input type="radio" name="idioma" id="espanol" value="spanish" checked> <!--checked para ponerlo por defecto-->
            <label for="ingles">English</label>
            <input type="radio" name="idioma" id="ingles" value="english">
            <label for="aleman">Deutch</label>
            <input type="radio" name="idioma" id="aleman" value="deutch">
        </p>
        <p>Selecciona marca de coche:</p>
        <p>
            <select name="marcas" id="marcas" required>
                <option value="BMW">BMW</option>
                <option value="Seat">Seat</option>
                <option value="Audi">Audi</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Opel">Opel</option>
                <option value="Tesla">Tesla</option>
            </select>
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>