<?php

// Clase app de nuestra aplicación donde se añadirán todas las funciones.
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
                  header("Location: ?method=home");
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
  
              header("Location: ?method=home");
          }

        // Función 'home': Muestra la lista de deseos. Además muestra un formulario de nuevos deseos.
        public function home(){       
            include('home.php');
        }

        // Función 'new': Agrega un nuevo deseo a la lista de deseos
        // En caso de que la cookie está creada y se ha enviado un deseo, coge los datos guardados en la cookie.
        // Si la cookie no está creada, entonces se comprueba si se ha enviado un deseo nuevo. 
        // Cuando se complete, redirecciona a la página de home.php
        public function new(){
            
            if(isset($_COOKIE["listaDeseo"]) && !empty($_POST["nuevoDeseo"])){
                $lista2 = json_decode($_COOKIE["listaDeseo"], true);
                $lista2[] = $_POST["nuevoDeseo"];  // Descodifica los datos y los guarda en una array asociativo con 'true'.          
                setcookie("listaDeseo", json_encode($lista2), strtotime("+2 week"), '/'); // Se crea la cookie con ese deseo.

            }else{
                if(!empty($_POST["nuevoDeseo"])){          
                    $lista[] = $_POST["nuevoDeseo"];
                    setcookie("listaDeseo", json_encode($lista), strtotime("2+ week"), '/'); 
                }            
            }        
            header("Location: ?method=home");
            
        }
        // Función 'delete': Borra un deseo de la lista. Debe recibir el indice del deseo. 
        // Sobreescribe la Cookie creada, codificándola en json.
        // Cuando se complete, redirecciona a la página de home.php
        public function delete(){
            if(isset($_COOKIE["listaDeseo"]) && !empty($_POST["borrarDeseo"])){
                $lista = json_decode($_COOKIE["listaDeseo"], true);  // Decodifica los datos de la cookie en un array.
                unset($lista[$_POST["borrarDeseo"]-1]); // Borra el deseo escogido.
                $lista = array_values($lista); // Reinicia los valores del array.
                
                setcookie("listaDeseo", json_encode($lista), strtotime("2+ week"), '/');
                header("Location: ?method=home");
            }else{
                header("Location: ?method=home");
            }
        }

        // Función 'empty': Vacía la lista de deseos.
        // En caso de que la cookie está creada, la borra y redirecciona a home.php
        // Si no está creada, redirecciona a home.php
        public function empty(){
            if(isset($_COOKIE["listaDeseo"])){
                setcookie("listaDeseo", "", time() -77, '/'); // Barra '/' sirve para que sea compatible en Google Chrome.
                header("Location: ?method=home");
            }else{
                header("Location: ?method=home");
            }        
        }

        // Funcion 'close': Cierra sesión: borra la cookie.
        // Envía a login para que se identifique.
        public function close(){

                setcookie("Datos", "", time() -1);
                header("Location: ?method=login");
                        
        }
    
}