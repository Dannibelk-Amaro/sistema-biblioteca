<!DOCTYPE html>
<html lang="es">
<?php require_once("comunes/head.php"); ?>
<body>
    <?php require_once("comunes/cinta.php"); ?>
    <div class="cuerpo">
        <?php require_once("comunes/nav.php"); ?>
        <div class="contenedor">
            <div class="titulo">
                <h2>Registro de Prestamo</h2>
            </div>
            <div class="barra">
                <div class="contenido">
                    <form action="" method="post" class="buscador" onsubmit="return validar()">
                        <div class="buscador">
                            <h4>Buscar Usuario: </h4><input type="text" name="cedula_usuario" placeholder="Cedula del usuario" id="" required required onkeypress="letras(event);">
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
                    <form action="" method="post" class="datos-usuario" onsubmit="return validar()">
                        <div class="usuario">
                                <input type="hidden" id="id" value="<?php echo $o->get_id_usuario(); ?>" name="id_usuario" >
                            <div>
                                <label for="rol">Rol:</label>
                                <select name="nombre_rol" id="rol" required>
                                    <option value="<?php echo $o->get_nombre_rol(); ?>"><?php echo $o->get_nombre_rol(); ?></option>
                                    <?php
                                        if(isset($m)){
                                            foreach ( $m as $f){
                                    ?>
                                    <option value="<?php echo $f['nombre_rol'];?>"/><?php echo $f['nombre_rol'];?></option>
                                    <?php
                                            } 
                                        } 
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="cedula">Cedula:</label>
                                <input type="text" id="cedula" value="<?php echo $o->get_cedula_usuario(); ?>" name="cedula_usuario" required placeholder="Ejemplo: 12345678" onkeypress="numeros(event);">
                            </div>
                            <div>
                                <label for="nombre_usuario">Nombre y Apellido:</label>
                                <input type="text" name="nombre_usuario" value="<?php echo $o->get_nombre_usuario(); ?>" id="nombre_usuario"  required placeholder="Ejemplo: Jose Gil" onkeypress="letras(event);">
                            </div>
                            <div>
                                <label for="estado">Grado:</label>
                                <input type="text" id="estado" value="<?php echo $o->get_estado_usuario(); ?>" name="estado_usuario" required placeholder="Ejempplo: 5to A">
                                <p class='nota'> NOTA: Si es un profesor colocar en grado la materia que imparte  </p>
                            </div>
                            </div>   
                                               
                            <div class="botones">
                                    <button name="guardar"> Guardar</button>
                                    <button name="modificar"> Modificar</button>
                                    <button name="eliminar"> Eliminar</button>
                                    <a href="?p=usuarios" class="cancelar">Cancelar</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer><h5>Junio, 2023</h5></footer>
</body>
</html>