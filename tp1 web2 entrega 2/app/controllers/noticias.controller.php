<?php

require_once 'app/models/noticias.model.php';
require_once 'app/views/noticias.view.php';
require_once 'app/helpers/auth.helper.php';


class noticiasController{
    private $model;
    private $view;

    public function __construct(){
        AuthHelper::verify();
        $this->model = new NoticiasModel();
        $this->view = new NoticiasView();
    }
    
    public function verNoticias(){

        $noticias = $this->model->mostrarNoticias();
        $this->view->mostrar($noticias);
    }

    public function crearNoticia(){
        AuthHelper::verify();


        // obtengo los datos del usuario
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        $fecha = $_POST['fecha'];

        // validar datos
        if (empty($titulo) || empty($contenido)) {
            $this->view->Error("Debes llenar los campos");
            return;
        }

        
        $id = $this->model->insertarNoticia($titulo, $contenido, $fecha);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            $this->view->Error("No se pudo crear la notica");
        }
    }
    public function eliminarNoticia($id){
        $this->model->eliminarNoticia($id);
        header('Location: ' . BASE_URL);
    }
    public function editarNoticia($id){
        $this->model->actualizarNoticia($id);
        header('Location: ' . BASE_URL);
        
    }
    
}
