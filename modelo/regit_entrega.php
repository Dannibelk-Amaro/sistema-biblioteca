<?php

    require_once("modelo/datos.php");

    class regit_prestamo extends datos{

        private $id_prestamo;
        private $imagen;
        private $tip_libreria;
        private $materia;
        private $editorial;
        private $nivel;
        private $nombre_rol;
        private $cedula_usuario;
        private $nombre_usuario;
        private $estado_usuario;
        private $codigo;
        private $fecha;
        private $estatus;

        function set_id_prestamo($id_prestamo){ $this->id_prestamo = trim($id_prestamo); }
        function set_imagen($imagen){ $this->imagen = trim($imagen); }
        function set_tip_libreria($tip_libreria){ $this->tip_libreria = trim($tip_libreria); }
        function set_materia($materia){ $this->materia = trim($materia); }
        function set_editorial($editorial){ $this->editorial = trim($editorial); }
        function set_nivel($nivel){ $this->nivel = trim($nivel); }
        function set_nombre_rol($nombre_rol){ $this->nombre_rol = trim($nombre_rol); }
        function set_cedula_usuario($cedula_usuario){ $this->cedula_usuario = trim($cedula_usuario); }
        function set_nombre_usuario($nombre_usuario){ $this->nombre_usuario = trim($nombre_usuario); }
        function set_estado_usuario($estado_usuario){ $this->estado_usuario = trim($estado_usuario); }
        function set_codigo($codigo){ $this->codigo = trim($codigo); }
        function set_fecha($fecha){ $this->fecha = trim($fecha); }
        function set_estatus($estatus){ $this->estatus = trim($estatus); }


        function get_id_prestamo(){ return $this->id_prestamo; }
        function get_imagen(){ return $this->imagen; }
        function get_tip_libreria(){ return $this->tip_libreria; }
        function get_materia(){ return $this->materia; }
        function get_editorial(){ return $this->editorial; }
        function get_nivel(){ return $this->nivel; }
        function get_nombre_rol(){ return $this->nombre_rol; }
        function get_cedula_usuario(){ return $this->cedula_usuario; }
        function get_nombre_usuario(){ return $this->nombre_usuario; }
        function get_estado_usuario(){ return $this->estado_usuario; }
        function get_codigo(){ return $this->codigo; }
        function get_fecha(){ return $this->fecha; }
        function get_estatus(){ return $this->estatus; }

        function guardar(){
            $b = $this->Busca("select d.tip_libreria, d.materia, d.editorial, d.nivel, d.codigo,
                                        p.fecha, p.nombre_rol, p.cedula_usuario, 
                                        p.nombre_usuario, p.estado_usuario, p.estatus 
                                        from prestamos p 
                                        inner join descripcion d 
                                        on p.codigo = d.codigo 
                                        where p.codigo='$this->codigo' and p.estatus='PENDIENTE'");
            $r = " GUARDADO ";
            if(!$b){
                $r = "EL LIBRO YA FUE ENTREGADO";
            }else{
                $e = $this->Ejecuta("update prestamos set estatus='ENTREGADO'
                                                        where id_prestamo='$this->id_prestamo'"," ");
            }
            return $r;
        }

        function buscar(){
            $b = $this->Busca("select p.id_prestamo, d.imagen, d.tip_libreria, d.materia, d.editorial, d.nivel, 
                                         d.codigo, p.fecha, p.nombre_rol, p.cedula_usuario, 
                                        p.nombre_usuario, p.estado_usuario, p.estatus 
                                        from prestamos p 
                                        inner join descripcion d 
                                        on p.codigo = d.codigo 
                                        where p.codigo='$this->codigo'");
            $r = "";
            if($b){

                $this->set_id_prestamo($b[0][0]);
                $this->set_codigo($b[0][6]);
                $this->set_imagen($b[0][1]);
                $this->set_tip_libreria($b[0][2]);
                $this->set_materia($b[0][3]);
                $this->set_editorial($b[0][4]);
                $this->set_nivel($b[0][5]);
                $this->set_nombre_rol($b[0][8]);
                $this->set_cedula_usuario($b[0][9]);
                $this->set_nombre_usuario($b[0][10]);
                $this->set_estado_usuario($b[0][11]);

            }
            else{
                $r = "EL CODIGO NO SE HA ENCONTRADO";
            }

            return $r;
        }

    }

?>