
<?php
include_once 'Modelo/modelo.php';
//include_once 'Controlador/controlador.php';
include_once 'Controlador/controlador.php';

$control = new controlador();
    
if(isset($_SESSION['usuario'])) {
  header('location: principal.php');
 }
$error = '';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri ); 

$control->recibirdatos($uri);
//echo(get_headers());
//$json = file_get_contents('php://input',true); // Con este funcion recibimos los datos enviados de javascript
//$datos = json_decode($json,true);

//$datos=$control->processRequest();
//echo($datos->getData());
//var_dump($datos->getData());
//$datos = json_decode($datos,true);
//if (isset($datos))
//$control->sendResponse(200, json_encode($datos->getData()), 'application/json');
//$metodo=$control->getMethod();
//var_dump($datos); 
//recibirdatos($uri,$datos);

/*
    if(isset($_SESSION['usuario'])) {
        header('location: principal.php');
    }
    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['clave'];
        $contrasena = hash('sha512', $contrasena);
              
       if (empty($usuario) or empty($contrasena))
            $error .= '<i>Favor de rellenar todos los campos</i>';
        else {
     
           $resul= $conector->conectarbd(1);
             if ($resul){
            
                     $resul_consulta=$conector->control->consulta_login($usuario,$contrasena);
     
                    if ($resul_consulta !== false){
                         $_SESSION['usuario'] = $usuario;
                           header('location: principal.php');
                           $conector->cerrarbd();
                    }else{
                           $error .= '<i>Este usuario no existe</i>';
                      }
                 }
        }
    }

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    funciona <?php ; ?> 
</body>
</html>



