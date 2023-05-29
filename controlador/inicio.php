<?php

    if(is_file("modelo/".$p.".php")){
        require_once("modelo/".$p.".php");
        if(is_file("vista/".$p.".php")){

            $o = new inicio();
            if(isset($_POST)){

                $o->get_imagen($_POST['imagen']);

                $m_i = $o->m_i();

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