<?php
    $p="inicio";
    if(!empty($_GET['p'])){
        $p=$_GET['p'];
    }
    if(is_file("controlador/".$p.".php")){
        require_once("controlador/".$p.".php");
    }
    else{
        echo "PAGINA EN CONSTRUCCION";
    }
?>