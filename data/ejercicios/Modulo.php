<?php

    class Modulo extends Asignatura{


        // Atributo
        private $codigo = null;

        // Constructor 
        function __construct($nombre, $numcreditos, $codigo)
        {   
            parent::__construct($nombre,$numcreditos); // Llamar a la clase padre
            $this->codigo = $codigo;
        }

        // Getters y Setters
        function getCodigo(){
            return $this->codigo;
        }

        function setCodigo($nuevocod){
            $this->codigo = $nuevocod;
        }

        

        function __toString()
        {
            return "<br> <h3>Datos del Módulo:</h3>"
            . "Nombre del Módulo: " . $this->getNombre()
            . "<br>Número de créditos: " . $this->getNumCreditos()
            . "<br> Código del Módulo: " . $this-> codigo;
        }

    }