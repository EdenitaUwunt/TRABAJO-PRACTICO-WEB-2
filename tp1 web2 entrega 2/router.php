<?php
require_once "config.php";
require_once 'app/controllers/noticias.controller.php';
require_once 'app/controllers/ultimatenoticia.controller.php';
require_once 'app/controllers/auth.controller.php';

$action = 'Inicio'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);


switch ($params[0]) {
    case 'Home':
        $controller = new noticiasController();
        $controller->verNoticias();
        break;
    case 'agregar':
        $controller = new noticiasController();
        $controller->crearNoticia();
        break;
    case 'eliminar':
        $controller = new noticiasController();
        $controller->eliminarNoticia($params[1]);
        break;
    case 'finalizar':
        $controller = new noticiasController();
        $controller->editarNoticia($params[1]);
        break;
    case 'history':
        $controller = new ultimatenoticia_controller();
        $controller->noticia();
        break;
    case 'login':
        $controller = new authController();
        $controller->login();
        break;
    case 'autenti':
        $controller = new authController();
        $controller->auth();
        break;
    case 'logout':
        $controller = new authController();
        $controller->logout();
        break;
    default:
        echo "Exploto todo F";
        break;
}
