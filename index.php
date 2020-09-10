<?php

#Configuración global
require_once 'config/global.php';

#Base para controladores
require_once 'core/baseController.php';

#Se capturan el controlador y la accion que viene por metodo GET
$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
$action = isset($_GET['action']) ? $_GET['action']: "";

#Se evalua el contorlador que llega por URL, en caso que no lleue nada, se asigna el controlador por defecto
switch (ucwords($controller)) {
    case 'Admin':
        $controlador = 'adminController';
    break;
    
    case 'Receptionist':
        $controlador = 'receptionistController';
    break;
    
    case 'Client':
        $controlador = 'clientController';
    break;

    case 'Rooms':
        $controlador = 'roomController';
    break;
    case 'Reservation':
        $controlador = 'reservationController';
    break;
    case 'Typerooms':
        $controlador = 'typeRoomController';
    break;
    default:
        $controlador = DEFAULT_CONTROLLER;
    break;
}
$strFileController = 'controllers/'. $controlador . '.php';

if (is_file($strFileController))
{
    require_once $strFileController;

    $controllerObj = new $controlador();

    if ($action == "")
    {
        $action = DEFAULT_ACTION;
    }

    if(method_exists($controllerObj , $action))
    {
        $controllerObj->$action();
    }
    else
    {

        echo "No existe el metodo en el controlador";
    }
}
else
{
    
    var_dump($action);
    var_dump($controlador);
    var_dump($strFileController);
    echo "No existe el controlador";
}

