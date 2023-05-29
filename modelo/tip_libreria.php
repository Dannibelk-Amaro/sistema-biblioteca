<?php

    require_once("modelo/datos.php");

    class libreria extends datos{
 
        private $id_tip_libreria;
        private $tip_libreria;

        function set_id_tip_libreria($id_tip_libreria){ $this->id_tip_libreria = trim($id_tip_libreria); }
        function set_tip_libreria($tip_libreria){ $this->tip_libreria = trim($tip_libreria); }

        function get_id_tip_libreria(){ return $this->id_tip_libreria; }
        function get_tip_libreria(){ return $this->tip_libreria; }
        
        function guardar(){
            $b = $this->Busca("select * from biblioteca where tip_libreria='$this->tip_libreria'");
            $r = " GUARDADO ";
            if($b){
                $r = " EL TIPO DE LIBRERIA YA EXISTE ";
            }
            else{
                $e = $this->Ejecuta("insert into biblioteca(tip_libreria)
                                            values('$this->tip_libreria')","biblioteca_id_seq");
            }
            return $r;
        }

        function buscar(){
            $b = $this->Busca("Select * from biblioteca where tip_libreria = '$this->tip_libreria'");
            $r = "";
            if($b){
                $this->set_id_tip_libreria($b[0][0]);
                $this->set_tip_libreria($b[0][1]);
            }
            else{
                $r = "EL TIPO DE LIBRERIA NO SE HA ENCONTRADO";
            }

            return $r;
        }

        function modificar(){
            $b = $this->Busca("select * from biblioteca where id_tip_libreria='$this->id_tip_libreria'");
            $r = "MODIFICACION EXITOSA";
            if(!$b){
                $r = " EL TIPO DE LIBRERIA NO SE HA ENCONTRADO ";
            }
            else{
                $e = $this->Ejecuta("update biblioteca  set  tip_libreria='$this->tip_libreria'
                                                        where id_tip_libreria='$this->id_tip_libreria'","");
            } 
            return $r;
        }

        function eliminar(){
            $b = $this->Busca("select * from biblioteca where tip_libreria='$this->tip_libreria'");
            $r = "MODIFICACION EXITOSA";
            if(!$b){
                $r = " EL TIPO DE LIBRERIA NO SE HA ENCONTRADO ";
            }
            else{
                $b = $this->Busca("delete from biblioteca  where id_tip_libreria='$this->id_tip_libreria'");
                $r = " ELIMINADO ";
            } 
            return $r;
        }

        function mostrar(){
            $m = $this->Busca("select * from biblioteca");
            return $m;
        }

    }

?>