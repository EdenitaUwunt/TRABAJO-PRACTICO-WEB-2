<?php

class AuthHelper{
    /* Verificar el estado */
    public static function init(){
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
    /*  almacenana el id y usuario e inicia sesion */
    public static function login($usuario){
        AuthHelper::init();
        $_SESSION['user_id'] = $usuario->id;
        $_SESSION['user_usuario'] = $usuario->usuario;
    }

    /* cerrar sesión */
    public static function logout(){
        AuthHelper::init();
        session_destroy();
    }

    /* Verifica si está la sesion iniciada */
    public static function verify(){
        AuthHelper::init();
        if (!isset($_SESSION['usuarios_id'])) {
            header('Location: ' . BASE_URL . '/login');
            die();
        }
    }
}
