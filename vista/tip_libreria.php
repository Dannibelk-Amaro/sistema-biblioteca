<!DOCTYPE html>
<html lang="es">
<?php require_once("comunes/head.php"); ?>
<body>
    <?php require_once("comunes/cinta.php"); ?>
    <div class="cuerpo">
        <?php require_once("comunes/nav.php"); ?>
        <div class="contenedor">
            <div class="titulo">
                    <h2>Registro de Tipos de Libreria</h2>
            </div>
            <div class="barra">
                <div class="contenido">
                    <form action="" method="post" class="buscador"  onsubmit="return validar()">
                        <div class="buscador">
                            <h4>Buscar Tipo de Libreria: </h4><input type="text" name="tip_libreria" placeholder="Ejemplo: Atla" id="" required required onkeypress="letras(event);">
                            <button type="submit" name="buscar" class="button">Buscar</button>
                        </div>
                    </form>
                    <div class="return">
                        <?php 
                            if(isset($r)){
                                echo $r;
                            }
                        ?>
                    </div>
                    <form action="" method="post" class="form"  onsubmit="return validar()">
                        <div class="lista lista-libreria">
                        <table class="tabla">
                                <thead>
                                    <tr>
                                        <th>Tipo de Libreria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($m)){
                                            foreach($m as $f){
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo $f[1];
                                                    echo "</td>";
                                                echo "</tr>";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="libreria">
                                    <input type="hidden" value="<?php echo $o->get_id_tip_libreria(); ?>" name="id_tip_libreria">
                                <div>
                                    <h4>Tipo de Libreria:</h4>
                                    <input type="text" value="<?php echo $o->get_tip_libreria(); ?>" name="tip_libreria" placeholder="Ejemplo: Atla" required onkeypress="letras(event);"/>
                                </div>
                        </div>                   
                                <div class="botones">
                                    <button name="guardar"> Guardar</button>
                                    <button name="modificar"> Modificar</button>
                                    <button name="eliminar"> Eliminar</button>
                                    <a href="?p=librerias" class="cancelar">Cancelar</a>
                                </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
    <footer><h5>Junio, 2023</h5></footer>
</body>
</html>