<?php

    require_once("modelo/datos.php");

    class estadistica extends datos{

        private $materia;

        function set_materia($materia){ $this->materia = trim($materia); }

        function get_materia(){ return $this->materia; }

        function t_libros(){
            $t_libros = $this->Busca("SELECT materia, COUNT(materia) FROM descripcion GROUP by 1 HAVING COUNT(materia) > 0");
            return $t_libros;
        }

        function t_nivel(){
            $t_nivel = $this->Busca("SELECT nivel, COUNT(nivel) FROM descripcion GROUP by 1 HAVING COUNT(nivel) > 0");
            return $t_nivel;
        }

        function t_libreria(){
            $t_libreria = $this->Busca("SELECT tip_libreria, COUNT(tip_libreria) FROM descripcion GROUP by 1 HAVING COUNT(tip_libreria) > 0");
            return $t_libreria;
        }

        function t_l(){
            $t_l = $this->Busca("SELECT COUNT(*) FROM descripcion");
            return $t_l;
        }

        

    }

?>