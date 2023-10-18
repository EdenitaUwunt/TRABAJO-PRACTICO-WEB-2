<?php
require_once './app/views/history.view.php';

class Ultimatenoticia_controller{
    private $view;

    public function __construct(){
        $this->view = new Ultimatenoticia_view();
    }

    public function noticia(){
        $this->view->noticia();
    }
}