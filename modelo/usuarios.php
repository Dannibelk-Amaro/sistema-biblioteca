<?php

    require_once("modelo/datos.php");

    class usuario extends datos{
        
        private $id_usuario;
        private $nombre_rol;
        private $cedula_usuario;
        private $nombre_usuario;
        private $estado_usuario;
        
        function set_id_usuario($id_usuario){ $this->id_usuario = trim($id_usuario); }
        function set_nombre_rol($nombre_rol){ $this->nombre_rol = trim($nombre_rol); }
        function set_cedula_usuario($cedula_usuario){ $this->cedula_usuario = trim($cedula_usuario); }
        function set_nombre_usuario($nombre_usuario){ $this->nombre_usuario = trim($nombre_usuario); }
        function set_estado_usuario($estado_usuario){ $this->estado_usuario = trim($estado_usuario); }
    
        function get_id_usuario(){ return $this->id_usuario; }
        function get_nombre_rol(){ return $this->nombre_rol; }
        function get_cedula_usuario(){ return $this->cedula_usuario; }
        function get_nombre_usuario(){ return $this->nombre_usuario; }
        function get_estado_usuario(){ return $this->estado_usuario; }

        function mostrar(){
            $m = $this->Busca("select * from usuario");
            return $m;
        }

    }

?>