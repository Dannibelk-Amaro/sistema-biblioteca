<?php

    require_once("modelo/datos.php");

    class librerias extends datos{
        
        private $id_descripcion;
        private $materia;
        private $editorial;
        private $nivel;
        private $codigo;
        
        function set_id_descripcion($id_descripcion){ $this->id_descripcion = trim($id_descripcion); }
        function set_materia($materia){ $this->materia = trim($materia); }
        function set_editorial($editorial){ $this->editorial = trim($editorial); }
        function set_nivel($nivel){ $this->nivel = trim($nivel); }
        function set_codigo($codigo){ $this->codigo = trim($codigo); }
    
        function get_id_descripcion(){ return $this->id_descripcion; }
        function get_materia(){ return $this->materia; }
        function get_editorial(){ return $this->editorial; }
        function get_nivel(){ return $this->nivel; }
        function get_codigo(){ return $this->codigo; }

        function mostrar(){
            $m = $this->Busca("select * from descripcion");
            return $m;
        }

    }

?>