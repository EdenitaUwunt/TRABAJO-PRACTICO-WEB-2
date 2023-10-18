<?php
require_once './app/views/auth.view.php';
require_once './app/models/user.model.php';
require_once './app/helpers/auth.helper.php';

class authController
{
    private $view;
    private $model;

    function __construct(){

        $this->model = new userModel();
        $this->view = new authView();
    }

    public function login(){

        $this->view->login();
    }

    public function auth(){

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        if (empty($usuario) || empty($password)) {
            $this->view->login('Faltan completar datos');
            return;
        }

        //Buscar el user
        $usuario = $this->model->getByUser($usuario);
        if ($usuario && password_verify($password, $usuario->contraseña)) {
            //lo autentico
            AuthHelper::login($usuario);
            header('Location: ' . BASE_URL);
        } else {
            $this->view->login('Usuario inválido');
        }
    }

    //cierra la sesión del usuario actual
    public function logout(){
        AuthHelper::logout();
        header('Location: ' . BASE_URL);
    }
}
