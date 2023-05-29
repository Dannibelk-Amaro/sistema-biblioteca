<!DOCTYPE html>
<html lang="es">
<?php require_once("comunes/head.php"); ?>
<body>
    <?php require_once("comunes/cinta.php"); ?>
    <div class="cuerpo">
        <?php require_once("comunes/nav.php"); ?>
        <div class="contenedor">
            <div class="titulo">
                <h2>Registro de Entrega</h2>
            </div>
            <div class="barra">
                <div class="contenido">
                    <form action="" method="post" class="buscador">
                        <div class="buscador">
                            <h4>Buscar Codigo: </h4><input type="text" name="codigo" placeholder="Codigo del Libro" id="" required>
                            <button type="submit" name="buscar" class="button">Buscar</button>
                        </div>
                    </form>
                    <form action="" method="post" class="form">
                        <div class="prestamo">
                            <div class="return">
                                <?php 
                                    if(isset($r)){
                                        echo $r;
                                    }
                                ?>
                            </div>
                            <div class="data-libro">
                                    <input type="hidden" name="id_prestamo" value="<?php echo $o->get_id_prestamo(); ?>">
                                <div class="img-libro">
                                    <div class="img">
                                        <img src="img/libros/<?php echo $o->get_imagen(); ?>" id="result" name="imagen" readonly>
                                    </div>
                                </div>
                                <div class="descripcion-libro">
                                    <h3>Datos del Libro</h3>
                                    <div class="libro">
                                        <div>
                                            <h4>Tipo de Libreria:</h4><input type=text name="tip_libreria" value="<?php echo $o->get_tip_libreria(); ?>" readonly>
                                        </div>
                                        <div>
                                            <h4>Materia:</h4><input type=text name="materia" value="<?php echo $o->get_materia(); ?>" readonly>
                                        </div>
                                        <div>
                                            <h4>Editorial:</h4><input type=text name="editorial" value="<?php echo $o->get_editorial(); ?>" readonly>
                                        </div>
                                        <div>
                                            <h4>Grado:</h4><input type=text name="nivel" value="<?php echo $o->get_nivel(); ?>" readonly>
                                        </div>
                                        <div>
                                            <h4>Codigo:</h4><input type=text name="codigo" value="<?php echo $o->get_codigo(); ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="data-usuario">
                                <h3>Datos del usuario</h3>
                                <div class="retiro-usuario">
                                    <div>
                                        <h4>Rol:</h4><input type=text name="nombre_rol" value="<?php echo $o->get_nombre_rol(); ?>" readonly>
                                    </div>
                                    <div> 
                                        <h4>Cedula:</h4><input type=text name="cedula_usuario" value="<?php echo $o->get_cedula_usuario(); ?>" readonly>
                                    </div>
                                    <div>
                                        <h4>Nombre y Apellido:</h4><input type=text name="nombre_usuario" value="<?php echo $o->get_nombre_usuario(); ?>" readonly>
                                    </div>
                                    <div>
                                        <h4>Grado:</h4><input type=text name="estado_usuario" value="<?php echo $o->get_estado_usuario(); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="fecha-prestamo">
                                <h3>Condición</h3>
                                <div class="condicion">
                                    <div>
                                        <h4 style="text-align: center;">Fecha de Entrega:</h4>
                                        <input type="date" name="fecha" id="fecha">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="botones">
                            <button type="submit" name="guardar"> Guardar</button>
                            <button type="submit" name="eliminar"> Eliminar</button>
                            <a href="?p=prestamo" class="cancelar">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer><h5>Junio, 2023</h5></footer>
</body>
</html>