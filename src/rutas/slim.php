<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Respons;

use \Slim\Http\Body;
use \Slim\Http\Headers;
use \Slim\Http\Response;


$app->get('/', function(Request $request, Respons $response){
   require "app/view/home/home.php";
});


// multiples routas opcion 1
// $routes = array(
//   "/register",
//   "/register/"
// );
// foreach ($routes as $route) {
//   $app->get($route, function(Request $request, Respons $response){
//     require_once 'app/view/register/register.php';
//   });
// }

// multiples routas opcion 2

// $app->get("/{_:login|login/}", function(Request $request, Respons $response){
//   require_once 'app/view/register/register.php';
// });

// multiples routas opcion 3
// $nameFunction =  function(Request $request, Respons $response){
//     require_once 'app/view/register/register.php';
//   };

// $app->get("/registro");
// $app->get("/registro");



// ROUTES
$app->get("/{_:login|login/}", function(Request $request, Respons $response){
  require_once 'app/view/home/home.php';
});
$app->get("/{_:register|register/}", function(Request $request, Respons $response){
  require_once 'app/view/register/register.php';
});
$app->get("/{_:forgotten|forgotten/}", function(Request $request, Respons $response){
  require_once 'app/view/forgotten/forgotten.php';
});

// GET Todos los usuario
$app->get('/account', function(Request $request, Respons $response){
  $sql = "SELECT * FROM usuario";
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $clientes = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($clientes);
    }else {
      echo json_encode("No existen clientes en la BBDD.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
});

// GET Recueperar cliente por ID
$app->get('/account/{id}', function(Request $request, Respons $response){
  $id_cliente = $request->getAttribute('id');
  $sql = "SELECT * FROM usuario WHERE id = $id_cliente";
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql);

    if ($resultado->rowCount() > 0){
      $cliente = $resultado->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($cliente);
    }else {
      echo json_encode("No existen cliente en la BBDD con este ID.");
    }
    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
});


// POST Crear nuevo cliente
$app->post('/account/nuevo', function(Request $request, Respons $response){
   $nombre = $request->getParam('nombre');
   $apellidos = $request->getParam('apellidos');
   $telefono = $request->getParam('telefono');
   $email = $request->getParam('email');
   $direccion = $request->getParam('direccion');
   $ciudad = $request->getParam('ciudad');

  $sql = "INSERT INTO usuario (nombre, apellidos, telefono, email, direccion, ciudad) VALUES
          (:nombre, :apellidos, :telefono, :email, :direccion, :ciudad)";
  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':nombre', $nombre);
    $resultado->bindParam(':apellidos', $apellidos);
    $resultado->bindParam(':telefono', $telefono);
    $resultado->bindParam(':email', $email);
    $resultado->bindParam(':direccion', $direccion);
    $resultado->bindParam(':ciudad', $ciudad);

    $resultado->execute();
    echo json_encode("Nuevo cliente guardado.");

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
});



// PUT Modificar cliente
$app->put('/account/modificar/{id}', function(Request $request, Respons $response){
   $id_cliente = $request->getAttribute('id');
   $nombre = $request->getParam('nombre');
   $apellidos = $request->getParam('apellidos');
   $telefono = $request->getParam('telefono');
   $email = $request->getParam('email');
   $direccion = $request->getParam('direccion');
   $ciudad = $request->getParam('ciudad');

  $sql = "UPDATE usuario SET
          nombre = :nombre,
          apellidos = :apellidos,
          telefono = :telefono,
          email = :email,
          direccion = :direccion,
          ciudad = :ciudad
        WHERE id = $id_cliente";

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);

    $resultado->bindParam(':nombre', $nombre);
    $resultado->bindParam(':apellidos', $apellidos);
    $resultado->bindParam(':telefono', $telefono);
    $resultado->bindParam(':email', $email);
    $resultado->bindParam(':direccion', $direccion);
    $resultado->bindParam(':ciudad', $ciudad);

    $resultado->execute();
    echo json_encode("Cliente modificado.");

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
});


// DELETE borar cliente
$app->delete('/account/delete/{id}', function(Request $request, Respons $response){
   $id_cliente = $request->getAttribute('id');
   $sql = "DELETE FROM usuario WHERE id = $id_cliente";

  try{
    $db = new db();
    $db = $db->conectDB();
    $resultado = $db->prepare($sql);
     $resultado->execute();

    if ($resultado->rowCount() > 0) {
      echo json_encode("Cliente eliminado.");
    }else {
      echo json_encode("No existe cliente con este ID.");
    }

    $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}';
  }
});
