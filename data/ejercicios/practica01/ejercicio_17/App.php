<?php

    // Clase donde se muestran todas las funciones de la app.
    class App {

        // Función constructor de nuestra clase donde se creará un objeto con los siguientes datos:
        // name: nombre aplicación,  module: módulo de clase, teacher: nombre del profesor, student:nombre del estudiante.
        public function __construct($name = "Aplicación PHP")
        {
          $this->name = $name;
          $this->module = "Desarrollo Web en Entorno Servidor";
          $this->teacher = "Rafael Cabeza";
          $this->student = "Daniel Riveros";
        }

        // Función 'run' que mediante Get, obtiene el dato de la función a utilizar y la llama desde esta clase.
        // Por defecto, utilizará la función index().
        public function run()
        {
          if (isset($_GET['method'])) {
            $method = $_GET['method'];
          } else {
            $method = "index";
          }
          $this->$method();
        }

        // Función 'index': Tendrá el código de app_principal.php para ejecutar las redirecciones a las funciones.
        public function index(){   
            include('app_principal.php');
        }

        // Funciòn 'fibonacci': calcula y almacena un array con los números fibonacci anteriores a 1.000.000.
        // Envía el array a la función miArray().
        public function fibonacci(){
            $num1 = 0;
            $num2 = 1;
            $contador = 0;
            $array = [0,1];

        while ($contador < 1000000){
            for ($i=1; $i < 1000000 ; $i++) { 
                //echo  $i . ". " . "<b>$num1</b>" . "<br>";
                $num3 = $num2 + $num1;
                $num1 = $num2;
                $num2 = $num3;
                $contador++;
                $array[] = $num1;
            } 
        }
        $this->miArray($array);
        }

        // Función 'potencias2': calcula las potencias del 2 elevado 24 veces. Se almacena en un array.
        // Envía el array a la función miArray().
        public function potencias2(){
            $array = [];

            for ($i=0; $i <= 24 ; $i++) { 
                $potencia = 2**$i;
                $array[]= $potencia;
            }
            $this->miArray($array);
        }

        // Función 'factorial': calcula los números factoriales desde 1 hasta n, hasta que el último término sea el más cercano al millón.
        // Envía el array a la función miArray().
        public function factorial(){
            $resultado = 1;
            $array = [];

            for($i = 1; $resultado < 1000000; $i++){
                $array[] = $i;
                $resultado = 1;
                for($j = $i; $j >= 1; $j--){
                    $resultado *= $j;
                }                
            }
            unset($array[count($array)-1]); // Elimina del array el último número para evitar que sea superior al millon.
            $this->miArray($array);
        }

        // Función 'primo': calcula los números primos entre 1 y 10.000
        // Envía el array a la función miArray().
        public function primo(){
            $array = [];

            for ($i = 1; $i < 10000; $i++) {                
                $esPrimo = 1; // Variable booleana. 1 es primo(true). 0 no lo es (false).
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $esPrimo = 0;
                        break; 
                        //Si se comprueba que es primo el bucle se detiene.
                    }
                }                
                if ($esPrimo == 1)
                    $array[] = $i; // Si es primo, se guarda en el array.
            }
            $this->miArray($array);
        }

        // Función 'miArray': Muestra los arrays creados.
        // El último dato acaba con un punto(.)
        // Entre cada dato hay una coma(,)
        public function miArray($array){
         
            echo "<h3>Array resultado: </h3>";
            for($i = 0; $i < count($array); $i++){
                if($i == count($array)-1){
                    echo $array[$i] . ".";
                }else{
                    echo $array[$i] . ", ";
                }
            }
          
        }

}
