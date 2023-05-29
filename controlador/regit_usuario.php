<?php

    if(is_file("modelo/".$p.".php")){
        require_once("modelo/".$p.".php");
        if(is_file("vista/".$p.".php")){

            $o = new regit_usuario();
            if(isset($_POST)){ 

                $o->set_id_usuario($_POST['id_usuario']);
                $o->set_nombre_rol($_POST['nombre_rol']);
                $o->set_cedula_usuario($_POST['cedula_usuario']);
                $o->set_nombre_usuario($_POST['nombre_usuario']);
                $o->set_estado_usuario($_POST['estado_usuario']);
                
                if(isset($_POST['guardar'])){
                    $r = $o->guardar();
                } 
                else if(isset($_POST['buscar'])){
                    $r = $o->buscar();
                }
                else if(isset($_POST['modificar'])){
                    $r = $o->modificar();
                }
                else if(isset($_POST['eliminar'])){
                    $r = $o->eliminar();
                }

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