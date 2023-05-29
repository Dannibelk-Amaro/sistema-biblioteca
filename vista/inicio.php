<!DOCTYPE html>
<html lang="es">
<?php require_once("comunes/head.php"); ?>
<body>
    <?php require_once("comunes/cinta.php"); ?>
    <div class="cuerpo">
        <?php require_once("comunes/nav.php"); ?>
        <div class="contenedor">
            <div class="titulo">
                <h2>Inicio</h2>
            </div>
            <div class="barra">
                <div class="contenido">
                    <div class="return">
                        <?php 
                            if(isset($r)){
                                echo $r;
                            }
                        ?>
                    </div>
                    <form action="" method="post" class="form">
                            <?php
                                    if(isset($m_i)){
                                        foreach($m_i as $f){
                            ?>     
                                <div class="btn_inicio">
                                            <div class="img-inicio"><img src="img/libros/<?php echo $f[0]; ?>" value="<?php echo $f[0]; ?>" alt=""></div>
                                </div>
            
                                <?php
                                        }
                                    }
                                ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer><h5>Junio, 2023</h5></footer>
</body>
</html>