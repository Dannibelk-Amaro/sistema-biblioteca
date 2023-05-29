<?php

    if(is_file("modelo/".$p.".php")){
        require_once("modelo/".$p.".php");
        if(is_file("vista/".$p.".php")){

            $o = new libreria();
            if(isset($_POST)){

                $o->set_id_descripcion($_POST['id_descripcion']);
                $o->set_tip_libreria($_POST['tip_libreria']);
				
				$o->set_imagen($_FILES['imagen']['name']);
			    
			    $imagen=($_FILES['imagen']['name']);
				$tipoima =($_FILES['imagen']['type']);
				$tamanoima =($_FILES['imagen']['size']);

				if($tamanoima <= 1000000){
					
				if($tipoima=="image/jpg" || $tipoima=="image/png" || $tipoima=="image/jpeg") {
						
				$destino=$_SERVER['DOCUMENT_ROOT'] . '/Biblioteca02/img/libros/';
				move_uploaded_file($_FILES['imagen']['tmp_name'],$destino.$imagen);

					}//else{
						//echo "solo se puden subir imagenes .png / .jpg / .jpeg";
					//}

				}else{
				echo  "La imagen excede el tamaño";
				}
                
                $o->set_materia($_POST['materia']);
                $o->set_editorial($_POST['editorial']);
                $o->set_nivel($_POST['nivel']);
                $o->set_codigo($_POST['codigo']);

                if(isset($_POST['guardar'])){
                    $r = $o->guardar();
                }
                else if(isset($_POST['buscar'])){
                    $r = $o->buscar();
                }
                else if(isset($_POST['modificar'])){
                    $r = $o->modificar();
                }

                $mo = $o->mo();

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