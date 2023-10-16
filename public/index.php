<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
$router = new Router();

//Login 
$router->get('/',[LoginController::class, 'login']);
$router->post('/',[LoginController::class, 'login']);
$router->get('/logout',[LoginController::class, 'logout']);

//Crear Cuenta 
//get para que muestre el formulario
$router->get('/crear',[LoginController::class, 'crear']);
//post para que procese los datos del formulario 
$router->post('/crear',[LoginController::class, 'crear']);

//formulario de olvide mi password
$router->get('/olvide',[LoginController::class, 'olvide']);
$router->post('/olvide',[LoginController::class, 'olvide']);

//vamos a validar que sea un usuario del sistema y a enviarle la recuperacion de contraseña a traves de su email 
$router->get('/restablecer',[LoginController::class, 'restablecer']);
$router->post('/restablecer',[LoginController::class, 'restablecer']);

//mensaje de confirmacion de cuenta 
$router->get('/mensaje',[LoginController::class, 'mensaje']);
$router->get('/confirmar',[LoginController::class, 'confirmar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();