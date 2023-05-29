<!DOCTYPE html>
<html lang="es">
<?php require_once("comunes/head.php"); ?>
<body>
    <?php require_once("comunes/cinta.php"); ?>
    <div class="cuerpo">
        <?php require_once("comunes/nav.php"); ?>
        <div class="contenedor">
            <div class="titulo">
                    <h2>Registro de Librerias</h2>
            </div>
            <div class="barra">
                <div class="contenido">
                    <form action="" method="post" class="buscador" onsubmit="return validar()">
                        <div class="buscador">
                            <h4>Buscar Codigo: </h4><input type="text" name="codigo" placeholder="Ejemplo: 001" id="" required onkeypress="numeros(event);">
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
                    <form action="" method="post" class="form" enctype="multipart/form-data"  onsubmit="return validar()">
                            <div class="descripcion">
                                <div class="img-libro">
                                    <div class="img" ><img src="img/libro.jpg" alt="libro" id="result" ></div>
                                    <input type="file" id="imagen" name="imagen" value="<?php echo $o->get_imagen(); ?>" required onchange="readFile();"/>
                                </div>
                                <div class="libro">
                                        <input type="hidden" name="id_descripcion" value="<?php echo $o->get_id_descripcion(); ?>"  id="id_descripcion">
                                    <div>
                                        <label for="tip_libreria">Tipo de Libreria:</label>
                                        <select name="tip_libreria" id="tip_libreria" required >
                                            <option value="<?php echo $o->get_tip_libreria(); ?>"><?php echo $o->get_tip_libreria(); ?></option>
                                            <?php
                                                if(isset($mo)){
                                                    foreach ( $mo as $f){			
                                            ?>
                                            <option value="<?php echo $f['tip_libreria'];?>"/>
                                                <?php echo $f['tip_libreria'];?>	
                                            </option>
                                            <?php
                                                }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="materia">Materia:</label>
                                        <input type="text" name="materia" value="<?php echo $o->get_materia(); ?>"  id="materia" placeholder="Ejemplo: Quimica" required onkeypress="letras(event);">
                                    </div>
                                    <div>
                                        <label for="editorial">Editorial:</label>
                                        <input type="text" id="editorial" name="editorial" value="<?php echo $o->get_editorial(); ?>"  placeholder="Ejemplo: Santillana" required  onkeypress="letras(event);">
                                    </div>
                                    <div>
                                        <label for="nivel">Grado:</label>
                                        <input type="text" name="nivel" id="nivel" value="<?php echo $o->get_nivel(); ?>"  placeholder="Ejemplo: 3er año" required>
                                    </div>
                                    <div>
                                        <label for="codigo">Codigo:</label>
                                        <input type="text" id="codigo" name="codigo" value="<?php echo $o->get_codigo(); ?>"  placeholder="Ejemplo: 001" required  onkeypress="numeros(event);">
                                    </div>
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
    <script src="js/imagen.js"></script>
</body>
</html>