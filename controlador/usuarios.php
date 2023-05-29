<?php

    if(is_file("modelo/".$p.".php")){
        require_once("modelo/".$p.".php");
        if(is_file("vista/".$p.".php")){

            $o = new usuario();
            if(isset($_POST)){

                $o->get_nombre_rol($_POST['nombre_rol']);
                $o->get_cedula_usuario($_POST['cedula_usuario']);
                $o->get_nombre_usuario($_POST['nombre_usuario']);
                $o->get_estado_usuario($_POST['estado_usuario']);

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