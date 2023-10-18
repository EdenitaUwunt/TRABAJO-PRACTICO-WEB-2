<?php

class NoticiasView{
    public function mostrar($noticias){   
        
        $count = count($noticias);

       
        require 'templates/table.phtml';
    }

    public function Error($error){
        require 'templates/error.phtml';
    }
}
