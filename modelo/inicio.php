<?php

    require_once("modelo/datos.php");

    class inicio extends datos{

        private $imagen;

        function set_imagen($imagen){ $this->imagen = trim($imagen); }

        function get_imagen(){ return $this->imagen; }

        function m_i(){
            $m_i = $this->Busca("SELECT DISTINCT imagen FROM descripcion");
            return $m_i;
        }

    }

?>