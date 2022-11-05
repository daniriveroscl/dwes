<?php

    // Clase que contiene las funciones.
    class App {

        // Función constructor de nuestra clase donde se creará un objeto con los siguientes datos:
        // name: nombre aplicación, module: módulo de clase, teacher: nombre del profesor, student:nombre del estudiante.
        public function __construct($name = "Aplicación PHP"){
          $this->name = $name;
          $this->module = "Desarrollo Web en Entorno Servidor";
          $this->teacher = "Rafael Cabeza";
          $this->student = "Daniel Riveros";
        }

        // Función 'run' que mediante Get, obtiene el dato de la función a utilizar y la llama desde esta clase.
        // Por defecto, utilizará la función index().
        public function run() {
          if (isset($_GET['method'])) {
            $method = $_GET['method'];
          } else {
            $method = "index";
          }
          $this->$method();
        }

        // Función 'index': Contiene el código de app_principal.php para ejecutar las redirecciones a las funciones.
        public function index(){   
            include('app_principal.php');
        }
    
        // Función 'login': Lee los datos de la cookie. 
        // En caso de que el campo "usuario" tiene contenido, nos dirige al index.
        // Si está vacio, nos devuelve a la página anterior login.php. 
        public function login(){

            if(!empty(json_decode($_COOKIE["Datos"], true)["Usuario"])){
                header("Location: app_principal.php");
            }else{
                header("Location: login.php");
            }        
        }

        // Función 'auth': Guarda el usuario y su contraseña en una cookie.
        // Se crea una cookie que durará una semana con el array de datos con usuario y contraseña.
        // Por último, nos manda al index.
        public function auth(){

            $datos = array(
                    "Usuario" => $_POST["nombre"], 
                    "Password" => $_POST["password"]);
            $cookie = json_encode($datos);
            setcookie("Datos", $cookie, strtotime("1+ week"));

            header("Location: app_principal.php");
        }

        // Función 'logout': Comprueba si existe la cookie con los datos del usuario ingresado. 
        // Si existe la borra y redirecciona a login.php
        // Si no existe, redirecciona también a login.php para que se identifique.
        public function logout(){

        if(isset($_COOKIE["Datos"])){
            setcookie("Datos", "", time() -1);
            header("Location: login.php");
        }else{
            header("Location: login.php");            
        }               
    }

}