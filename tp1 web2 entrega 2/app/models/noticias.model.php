    <?php

    class NoticiasModel{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=dbweb2;charset=utf8', 'root', '');
        }

        //Obtiene noticias y las muesrta. 

        function mostrarNoticias(){
            $query = $this->db->prepare('SELECT * FROM noticias');
            $query->execute();

            // noticias es un arreglo de Noticias
            $noticias = $query->fetchAll(PDO::FETCH_OBJ);


            return $noticias;
        }

        //  inserta noticias en la base de datos
        function insertarNoticia($titulo, $contenido, $fecha) {
            $query = $this->db->prepare('INSERT INTO noticias (`id_noticias`, `titulo`, `contenido`, `fecha`) VALUES (?,?,?,?,?)');
            $query->execute([$titulo, $contenido, $fecha]);

            //se inserta id para mostrar el ultimo id cargado.
            return $this->db->lastInsertId();
        }

        // Elimina la notica segun el ID 
        function eliminarNoticia($id) {
            $query = $this->db->prepare('DELETE FROM noticias WHERE id_usuario  = ?');
            $query->execute([$id]);
        }


        // Modifica una noticia dado su ID
        function actualizarNoticia($id) {
            $query = $this->db->prepare('UPDATE noticias SET finalizada = 1 WHERE id_usuario  = ?');
            $query->execute([$id]);
        }
        
    }
