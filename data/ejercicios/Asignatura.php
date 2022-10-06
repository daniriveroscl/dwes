<?php
    /*
        CONCEPTOS BÁSICOS JAVA:
            - Sobreescritura (métodos)
                > Mismo nombre con el mismo número de parámetros, diferente comportamiento
                    > Clase figura > Método calcular_area
                    > Clase círculo > Método calcular_area
                    > Clase cuadrado > Método calcular_area

            - Sobrecarga (métodos)
                > Mismo nombre con diferente número de parámetros.

            - Sobrecarga (constructor)
                > Diferentes constructores con mismo nombre pero diferentes parámetros.

            - Polimorfismo
                > Objeto que se comporta como otro. Mediante casting, sobreescritura, sobrecarga y ligadura dinámica.

        PHP:
            - Sí existe sobreescritura
            - No existe sobrecarga
            - No hay sobrecarga de constructores
            - Sí hay polimorfismo 
            - public, private, protected. Por defecto es public.

        NOTACIÓN:
            - Nombre de las clases: Primera letra en Mayus.
            - Nombre de los métodos: Primera letra Minus.

            $this->atributo
    */

    class Asignatura {

        // Atributos
        private $nombre = null;
        private $numcreditos = null;

        private static $ciclo = null; // static pertenece a la clase


        // Constructor
        public function __construct($nombre, $numcreditos){ // SIEMPRE debe llevar el nombre __construct
            $this->nombre = $nombre;
            $this->numcreditos = $numcreditos;
        }


        // Getters y Setters
        function getNombre(){
            return $this->nombre;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function getNumCreditos(){
            return $this->numcreditos;
        }

        function setNumCreditos($numcreditos){
            $this->numcreditos = $numcreditos;
        }

        // De la variable estática:
        static function  getCiclo(){
            return self::$ciclo; // Sintaxis necesaria para variables estáticas.
        }

        static function  setCiclo($nomciclo){
            self::$ciclo = $nomciclo; // Sintaxis necesaria para variables estáticas.
        }

    
        function __toString()
        {
            return "<h3>Datos de la asignatura:</h3>"
            . "Nombre de la asignatura: " .$this->nombre
            . "<br>Número de créditos: " .$this->numcreditos;
        }
    }