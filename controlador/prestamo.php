<?php

    if(is_file("modelo/".$p.".php")){
        require_once("modelo/".$p.".php");
        if(is_file("vista/".$p.".php")){

            $o = new prestamo();
            if(isset($_POST)){

                $o->set_materia($_POST['materia']);
                $o->set_editorial($_POST['editorial']);
                $o->set_nivel($_POST['nivel']);
                $o->set_cedula_usuario($_POST['cedula_usuario']);
                $o->set_nombre_usuario($_POST['nombre_usuario']);
                $o->set_estado_usuario($_POST['estado_usuario']);
                $o->set_codigo($_POST['codigo']);
                $o->set_fecha($_POST['fecha']);
                $o->set_estatus($_POST['estatus']);
                
                $m = $o->mostrar();

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