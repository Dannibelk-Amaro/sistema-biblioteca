<?php

    require_once("modelo/datos.php");

    class regit_usuario extends datos{

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

        function guardar(){
            $b = $this->Busca("select * from usuario where cedula_usuario='$this->cedula_usuario'");
            $r = " GUARDADO ";
            if($b){
                $r = " EL USUARIO YA EXISTE ";
            }
            else{
                $e = $this->Ejecuta("insert into usuario(nombre_rol,
                                                        cedula_usuario,
                                                        nombre_usuario,
                                                        estado_usuario)
                                            values('$this->nombre_rol',
                                                    '$this->cedula_usuario',
                                                    '$this->nombre_usuario',
                                                    '$this->estado_usuario')","prestamo_id_seq");
            }
            return $r;
        }

        function buscar(){
            $b = $this->Busca("Select * from usuario where cedula_usuario = '$this->cedula_usuario'");
            $r = "";
            if($b){
                $this->set_id_usuario($b[0][0]);
                $this->set_nombre_rol($b[0][1]);
                $this->set_cedula_usuario($b[0][2]);
                $this->set_nombre_usuario($b[0][3]);
                $this->set_estado_usuario($b[0][4]);
            }
            else{
                $r = "EL USUARIO NO SE HA ENCONTRADO";
            }

            return $r;
        }

        function modificar(){
            $b = $this->Busca("select * from usuario where id_usuario='$this->id_usuario'");
            $r = "MODIFICACION EXITOSA";
            if(!$b){
                $r = " EL USUARIO NO SE HA ENCONTRADO ";
            }
            else{
                $e = $this->Ejecuta("update usuario  set  nombre_rol='$this->nombre_rol',
                                                            cedula_usuario='$this->cedula_usuario',
                                                            nombre_usuario='$this->nombre_usuario',
                                                            estado_usuario='$this->estado_usuario'
                                                        where id_usuario='$this->id_usuario'","");
            } 
            return $r;
        }

        function eliminar(){
            $b = $this->Busca("select * from usuario where cedula_usuario='$this->cedula_usuario'");
            $r = "MODIFICACION EXITOSA";
            if(!$b){
                $r = " EL USUARIO NO SE HA ENCONTRADO ";
            }
            else{
                $b = $this->Busca("delete from usuario where id_usuario='$this->id_usuario'");
                $r = " ELIMINADO ";
            } 
            return $r;
        }

        function mostrar(){
            $m = $this->Busca("select nombre_rol from rol order by nombre_rol asc");
            return $m;
        }

    }

?>