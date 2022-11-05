<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentación de la App</title>
</head>
<body>
 
    <!-- Crea una aplicación web con una clase App y varios métodos. 
    En todos los casos se trata de obtener una serie numérica. 
    El método debe calcular la serie y guardarla en un array, 
    después hay que incluir una vista que muestre la serie. 
    Puede ser que necesites crear métodos auxiliares (private) 
    para el cálculo del array, por ejemplo: esPrimo(). Los métodos necesarios son:

    - Index (index). Presentación de la App y enlaces.
    - Fibonacci (fibonacci). Muestra la serie de Fibonacci.
    Debe mostrar todos los términos menores a un millón.
    - Potencias de 2 (potencias2). Debe mostrar los valores de las potencias
    de 2 hasta 2 elevado a 24 (nº de colores True Color, por ejemplo).
    - Factorial (factoriales). Debe mostar los factoriales desde 1 hasta n de tal 
    manera que el último término sea el más próximo cercano al millón.
    - Nº. primos (primos). Debe encontrar los números primos entre 1 y 10.000. 
    -->
 
   <h2>Bienvenido a mi primera App.</h2>
   <h3 style="font-style:italic">Escoge alguna opción:</h3>
  
    <ul style="list-style:none;">
        <!-- Enlaces que redirigen a los diferentes métodos matemáticos-->
        <li><a href="?method=fibonacci">Mostrar la cadena fibonacci de los términos menores a un millón</a></li>
        <li><a href="?method=potencias2">Mostrar los valores de las potencias de 2 hasta 2 elevado a 24</a></li>
        <li><a href="?method=factorial">Mostrar los números factoriales hasta el más cercano al millón</a></li>
        <li><a href="?method=primo">Mostrar los números primos entre 1 y 10.000</a></li>
    </ul>
</body>
</html>

