<?php
// Clase app de nuestra aplicación donde se añadirán todas las funciones.

class App {
    // Funcion constructor: constructor de nuestra clase donde se creará un objeto que incluirá los siguientes datos:
    // name -> nombre aplicación
    public function __construct($name = "Aplicación para lista de deseos"){
      $this->name = $name;
    }

    // Función run: obtendrá de la cabecera, con Get, el dato de la función a utilizar y lanzará la función llamada de esta misma clase
    // Por defecto, si no se le indica ninguna función, utilizará la función index()
    public function run(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = "index";
        }
        $this->$method();
    }

    // Función index: incluirá el código de pagina.php para poder leer las redirecciones a las funciones.
    public function index(){
       include('vistas/indice.php');
    }


    // Función login: Leera los datos de la cookie. Si no está vacio el campo "usuario" devolverá al index, por el contrario, si se encuentra
    // vacio, devolverá de nuevo a la pagina login.php para que se identifique. 
    public function login(){
        //El valor true en json_decode convierte el Objeto en un array asociativo
        if(!empty(json_decode($_COOKIE["DatosUser"], true)["Usuario"])){
            header("Location: ?method=home");
        }else{            
            include('vistas/login.php');
        }        
    }

    // Función auth(Autenticación): leerá el usuario y contraseña y los incluirá en un array.
    // Se creará una cookie que durará 1 dia. Se le insertará la array de datos con usuario y contraseña.
    // Al finalizar redirigirá al index.
    public function auth(){
        $datos = array(
            "Usuario" => $_POST["nombre"], 
            "Pass" => $_POST["pass"]);

        $cookie = json_encode($datos);
        setcookie("DatosUser", $cookie, strtotime("1+ day"));
        
        header("Location: ?method=home");
    }

    // Función home: visualiza la página home.php. Página con la lista de deseos.
    public function home(){       
       include('vistas/home.php');
    }

    // Función new:  añade un nuevo elemento a la lista de deseos
    // -Si la cookie con los datos está creada y se ha enviado un deseo obtendrá los datos guardados en la cookie, decodificará los datos en json y los guardará en una array como array asociativa (true)
    //  Leerá el campo de deseo nuevo, lo incluirá en la array, la codificará en json y añadirá la array nueva a la cookie sustituyendo la anterior con los datos nuevos
    // - Si la cookie no está creada comprobará si se ha enviado un deseo nuevo. Posteriormente creará una cookie con ese deseo
    // La cookie tendrá una duración de 1 semana, para poder leer de nuevo la información si vuelve el usuario.
    // Al finalizar redireccionará a la página de home.php
    public function new(){
        if(isset($_COOKIE["listaDeseo"]) && !empty($_POST["nuevo_deseo"])){
            $lista2 = json_decode($_COOKIE["listaDeseo"], true);
            $lista2[] = $_POST["nuevo_deseo"];            
            setcookie("listaDeseo", json_encode($lista2), strtotime("+1 week"), '/');

        }else{
            if(!empty($_POST["nuevo_deseo"])){          
                $lista[] = $_POST["nuevo_deseo"];
                setcookie("listaDeseo", json_encode($lista), strtotime("1+ week"), '/'); 
            }            
        }        
        header("Location: ?method=home");
        
    }
    //Funcion delete: borra un objeto de la lista por su número de identificativo en la lista ordenada. 
    //Decodificará los datos de la cookie en una array y borrara el valor elegido y reiniciará el index del array
    //Luego sobreescribirá la Cookie creada, codificandola en json.
    //Al finalizar redireccionará a la pagina de home.php
    public function delete(){
        if(isset($_COOKIE["listaDeseo"]) && !empty($_POST["borrar_deseo"])){
            $lista = json_decode($_COOKIE["listaDeseo"], true);
            unset($lista[$_POST["borrar_deseo"]-1]);
            $lista = array_values($lista); //Función para "reiniciar" los valores de la array y comenzar de nuevo numericamente de manera ascendente
            
            setcookie("listaDeseo", json_encode($lista), strtotime("1+ week"), '/');
            header("Location: ?method=home");
        }else{
            header("Location: ?method=home");
        }
    }

    // Función empty: borra la lista de deseos entera
    // Si la cookie está creada la borrará, eliminando así todos los datos almacenados y redireccionará a home.php
    // Si no está creada porque no ha añadido ningún dato redireccionará a la misma página donde se encontraba
    public function empty(){
        if(isset($_COOKIE["listaDeseo"])){
            setcookie("listaDeseo", "", time() -120, '/');
            header("Location: ?method=home");
        }else{
            header("Location: ?method=home");
        }        
    }

    // Funcion logout: comprobará si existe la cookie con datos del usuario logeado. Si existe la borrará y redireccionará a login
    // En caso de no existir, mandará a login para que se identifique primero.
    public function logout(){
        if(isset($_COOKIE["DatosUser"])){
            setcookie("DatosUser", "", time() -1);
            header("Location: ?method=login");
        }else{
            header("Location: ?method=login");            
        }               
    }
    
}