<?php

    require_once("modelo/datos.php");

    class libreria extends datos{

        private $id_descripcion;
        private $tip_libreria;
        private $imagen;
        private $materia;
        private $editorial; 
        private $nivel;
        private $codigo;

        function set_id_descripcion($id_descripcion){ $this->id_descripcion = trim($id_descripcion); }
        function set_tip_libreria($tip_libreria){ $this->tip_libreria = trim($tip_libreria); }
        function set_imagen($imagen){ $this->imagen = trim($imagen); }
        function set_materia($materia){ $this->materia = trim($materia); }
        function set_editorial($editorial){ $this->editorial = trim($editorial); }
        function set_nivel($nivel){ $this->nivel = trim($nivel); }
        function set_codigo($codigo){ $this->codigo = trim($codigo); }
        function set_status($status){ $this->status = trim($status); }

        function get_id_descripcion(){ return $this->id_descripcion; }
        function get_tip_libreria(){ return $this->tip_libreria; }
        function get_imagen(){ return $this->imagen; }
        function get_materia(){ return $this->materia; }
        function get_editorial(){ return $this->editorial; }
        function get_nivel(){ return $this->nivel; }
        function get_codigo(){ return $this->codigo; }

        function guardar(){
            $b = $this->Busca("select * from descripcion where codigo='$this->codigo'");
            $r = " GUARDADO ";
            if($b){
                $r = " EL CODIGO YA EXISTE ";
            }
            else{
                $e = $this->Ejecuta("insert into descripcion(imagen,
                                                            tip_libreria,
                                                            materia,
                                                            editorial,
                                                            nivel,
                                                            codigo)
                                            values('$this->imagen',
                                                    '$this->tip_libreria',
                                                    '$this->materia',
                                                    '$this->editorial',
                                                    '$this->nivel',
                                                    '$this->codigo')","descripcion_id_seq");
            }
            return $r;
        }

        function buscar(){
            $b = $this->Busca("Select * from descripcion where codigo = '$this->codigo'");
            $r = "";
            if($b){
                $this->set_id_descripcion($b[0][0]);
                $this->set_imagen($b[0][1]);
                $this->set_tip_libreria($b[0][2]);
                $this->set_materia($b[0][3]);
                $this->set_editorial($b[0][4]);
                $this->set_nivel($b[0][5]);
                $this->set_codigo($b[0][6]);
            }
            else{
                $r = "LA LIBRERIA NO SE HA ENCONTRADO";
            }

            return $r;
        }

        function modificar(){
            $b = $this->Busca("select * from descripcion where id_descripcion='$this->id_descripcion'");
            $r = "MODIFICACION EXITOSA";
            if(!$b){
                $r = " EL TIPO DE LIBRERIA NO SE HA ENCONTRADO ";
            }
            else{
                $e = $this->Ejecuta("update descripcion  set  imagen='$this->imagen',
                                                            tip_libreria='$this->tip_libreria',
                                                            materia='$this->materia',
                                                            editorial='$this->editorial',
                                                            nivel='$this->nivel',
                                                            codigo='$this->codigo'
                                                        where id_descripcion='$this->id_descripcion'","");
            } 
            return $r;
        }
        
        function mo(){
            $mo = $this->Busca("select tip_libreria from biblioteca order by tip_libreria asc");
            return $mo;
        }

    }

?>