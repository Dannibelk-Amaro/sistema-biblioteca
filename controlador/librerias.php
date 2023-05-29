<?php

    if(is_file("modelo/".$p.".php")){
        require_once("modelo/".$p.".php");
        if(is_file("vista/".$p.".php")){

            $o = new librerias();
            if(isset($_POST)){

                $o->get_id_descripcion($_POST['id_descripcion']);
                $o->get_materia($_POST['materia']);
                $o->get_editorial($_POST['editorial']);
                $o->get_nivel($_POST['nivel']);
                $o->get_codigo($_POST['codigo']);

                $m = $o->mostrar();

            }

            require_once("vista/".$p.".php");
        }
        else{
            echo "FALTA DEFINIR LA VISTA";
        }
    }
    else{
        echo "PAGINA EN CONTRUCCION";
    }

?>