<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Calculadora</title>
</head>
<body>
    <!-- Envío del script al mismo script. Crea un formulario que funcione como calculadora. 
    Debe contener dos input como operandos y un select para elegir operador.

    Si se reciben los datos muestra el resultado.
    Si no son válidos o no existen debe mostrar de nuevo el formulario de calculadora.-->

    <!--Formulario que se redirecciona a si mismo mediante el método Post -->
    <!--2 tipos de inputs: número(number) y envío(submit)-->
    <form action="" method="post">
        <fieldset>
            <legend> <h3>Calculadora Online</h3> </legend>

            <label for="operando1">Primer número: </label>
            <input type="number" name="operando1">

            <label for="operador">Operador: </label>
            <select name="operador" id="operador"> <!-- Lista desplegable simple. Solo se puede escoger una opción-->  
                <option value="suma">+</option> <!--Opción por defecto-->
                <option value="resta">-</option>
                <option value="multiplicacion">*</option>
                <option value="division">/</option>
            </select>

            <label for="operando2">Segundo número: </label>
            <input type="number" name="operando2"> &nbsp;
            
            <input type="submit" value="Mostrar resultado">
        </fieldset>
    </form>

    <?php
        // Código PHP donde $_POST ["operando1"] !="" es equivalente a !empty($_POST)
       if ($_POST ["operando1"] !="" && $_POST ["operando2"]!=""){

        $operador = $_POST["operador"]; // Creamos una variable mediante el array $_POST de "operador"
        $operando1 = $_POST ["operando1"];
        $operando2 = $_POST ["operando2"];

        if (!empty ($operador)) {
            switch ($operador) { //Switch case según el operador que se use.
                case "suma":
                    print("<br>El resultado de la suma es: <b>" . ($operando1 + $operando2) . "</b>"); // Muestra el resultado de la operación escogida
                    break;
                case "resta":
                    echo("<br>El resultado de la resta es: <b>" . ($operando1 - $operando2) . "</b>");
                    break;
                case "multiplicacion":
                    echo("<br>El resultado de la multiplicación es: <b>" . ($operando1 * $operando2) . "</b>");
                    break;
                case "division":
                    echo("<br>El resultado de la división es: <b>" . ($operando1 / $operando2) . "</b>");
                     break;
            }
        }
    } else {
        echo("<br>&nbsp;<i>Ingresa los valores</i>"); // Mensaje de cuando aún no se ingresan valores.
    }
    ?>
</body>
</html>

