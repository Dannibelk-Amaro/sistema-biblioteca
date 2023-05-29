<?php

    require_once("modelo/datos.php");

    class prestamo extends datos{

        private $materia;
        private $editorial;
        private $nivel;
        private $cedula_usuario;
        private $nombre_usuario;
        private $estado_usuario;
        private $codigo;
        private $fecha;
        private $estatus;

        function set_materia($materia){ $this->materia = trim($materia); }
        function set_editorial($editorial){ $this->editorial = trim($editorial); }
        function set_nivel($nivel){ $this->nivel = trim($nivel); }
        function set_cedula_usuario($cedula_usuario){ $this->cedula_usuario = trim($cedula_usuario); }
        function set_nombre_usuario($nombre_usuario){ $this->nombre_usuario = trim($nombre_usuario); }
        function set_estado_usuario($estado_usuario){ $this->estado_usuario = trim($estado_usuario); }
        function set_codigo($codigo){ $this->codigo = trim($codigo); }
        function set_fecha($fecha){ $this->fecha = trim($fecha); }
        function set_estatus($estatus){ $this->estatus = trim($estatus); }

        function get_materia(){ return $this->materia; }
        function get_editorial(){ return $this->editorial; }
        function get_nivel(){ return $this->nivel; }
        function get_cedula_usuario(){ return $this->cedula_usuario; }
        function get_nombre_usuario(){ return $this->nombre_usuario; }
        function get_estado_usuario(){ return $this->estado_usuario; }
        function get_codigo(){ return $this->codigo; }
        function get_fecha(){ return $this->fecha; }
        function get_estatus(){ return $this->estatus; }

        function mostrar(){
            $m = $this->Busca("select  d.tip_libreria, d.materia, d.editorial, d.nivel, d.codigo, p.fecha,
                                        p.nombre_rol, p.cedula_usuario, p.nombre_usuario, p.estado_usuario,
                                        p.estatus
                                from prestamos p
                                inner join descripcion d
                                on p.codigo = d.codigo
                                where estatus='PENDIENTE'");
            return $m;
        }

    }

?>