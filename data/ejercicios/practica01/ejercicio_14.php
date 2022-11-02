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

    <form action="" method="post">
        <fieldset>
            <legend> <h3>Calculadora Online</h3> </legend>
            <label for="operando1">Primer número: </label>
            <input type="number" name="operando1">

            <label for="operando2">Segundo número: </label>
            <input type="number" name="operando2"> &nbsp;

            <label for="operador">Operador: </label>
            <select name="operador" id="operador">
                <option value="suma">+</option> <!--Opción por defecto-->
                <option value="resta">-</option>
                <option value="multiplicacion">*</option>
                <option value="division">/</option>
            </select>&nbsp;&nbsp;
            
            <input type="submit" value="Mostrar resultado">
        </fieldset>
    </form>

    <?php
       if ($_POST ["operando1"] !="" and $_POST ["operando2"]!=""){
        $operador = $_POST["operador"];
        if (!empty ($operador)) {
            switch ($operador) {
                case "suma":
                    print("<br>El resultado de la suma es: <b>" . ($_POST ["operando1"] + $_POST ["operando2"]) . "</b>");
                    break;
                case "resta":
                    echo("<br>El resultado de la resta es: <b>" . ($_POST ["operando1"] - $_POST ["operando2"]) . "</b>");
                    break;
                case "multiplicacion":
                    echo("<br>El resultado de la multiplicación es: <b>" . ($_POST ["operando1"] * $_POST ["operando2"]) . "</b>");
                    break;
                case "division":
                    echo("<br>El resultado de la división es: <b>" . ($_POST ["operando1"] / $_POST ["operando2"]) . "</b>");
                     break;
            }
        }
    } else {
        echo("<br>&nbsp;Ingresa los valores");
    }
    ?>
</body>
</html>

