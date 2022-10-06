<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Credenciales</h1>
    <form name="miformu" action="autoriza.php" method="get"><!--Si ponemos en method "Get" en la url se vera el usuario y contraseña enviados-->
        <p>
            <label for="nombre">Introduce Nombre: </label>
            <input type="text" name="nombreusu" id="nombreusu"><!--Para php necesitaremos el campo name, para JavaScript el campo ID-->
        </p>
        <p>
            <label for="password">Introduce la contraseña: </label>
            <input type="password" name="passwd" id="passwd">
        </p>

        <p> <!--Se pueden elegir varias opciones-->
            <p>Elije tu asignatura preferida</p><!--Al ser php y al poder recoger varios datos tenemos que poner que el name es un array para que pueda recoger todo, sino solo cogería uno-->
            <label for="asignatura1">PHP: </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura1" value="PHP">
            <label for="asignatura2">JavaScript </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura2" value="JavaScript">
            <label for="asignatura3">Python </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura3" value="Python">
            <label for="asignatura4">SQL </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura4" value="SQL">
        </p>
        <p>Elige tu equipo de basket favorito</p>
        <p> <!--Solo se puede elegir una opción-->
            <label for="equipo1">Casademont ZgZ</label>
            <input type="radio" name="equipo" id="equipo1" value="Casademont" checked> <!--checked para ponerlo preseleccionado-->
            <label for="equipo2">San Pablo Burgos</label>
            <input type="radio" name="equipo" id="equipo2" value="Burgos">
            <label for="equipo3">Obrador</label>
            <input type="radio" name="equipo" id="equipo3" value="Obrador">
        </p>

        <!--Lista desplegable Simple-->
        <p>Elige tu plato favorito</p>
        <p>
            <select name="menus" id="menus">
                <option value="codillo">Codillo asado</option>
                <option value="ensalada">ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>

        <!--Lista desplegable Múltiple-->
        <p>Elige tus platos favoritos</p>
        <p>
            <select name="menusm[]" id="menus" multiple size="6" required> <!--required para que sea obligatorio escoger-->
                <option value="codillo">Codillo asado</option>             <!-- size para establecer tamaño de la lista-->
                <option value="ensalada">ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>

        <input type="hidden" name="ip" value="<?=$_SERVER['SERVER_ADDR']?>"> <!--Código PHP para averiguar la ip-->
        
        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>   
</body>
</html>