<?php

    if(is_file("modelo/".$p.".php")){
        require_once("modelo/".$p.".php");
        if(is_file("vista/".$p.".php")){

            $o = new estadistica();
            if(isset($_POST)){

                $o->set_materia($_POST['materia']);
                
                $t_libros = $o->t_libros();
                $t_nivel = $o->t_nivel();
                $t_libreria = $o->t_libreria();
                $t_l = $o->t_l();

            }

            require_once("vista/".$p.".php");
        }
        else{
            echo "FALTA DEFINIR LA VISTA";
        }
    }
    else{
        echo "PAGUINA EN CONTRUCCION";
    }

?>