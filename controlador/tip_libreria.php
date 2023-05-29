<?php

    if(is_file("modelo/".$p.".php")){
        require_once("modelo/".$p.".php");
        if(is_file("vista/".$p.".php")){

            $o = new libreria();
            if(isset($_POST)){

                $o->set_id_tip_libreria($_POST['id_tip_libreria']);
                $o->set_tip_libreria($_POST['tip_libreria']);
                
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
        echo "PAGINA EN CONTRUCCION";
    }

?>