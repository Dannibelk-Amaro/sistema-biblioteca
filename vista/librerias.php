<!DOCTYPE html>
<html lang="es">
<?php require_once("comunes/head.php"); ?>
<body>
    <?php require_once("comunes/cinta.php"); ?>
    <div class="cuerpo">
        <?php require_once("comunes/nav.php"); ?>
        <div class="contenedor">
            <div class="titulo">
                    <h2>Librerias</h2>
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
                        <div class="boton">
                            <a href="?p=tip_libreria">Agregar Tipo de Libreria</a>
                            <a href="?p=regit_libreria">Agregar Libreria</a>
                        </div>
                        <div class="lista">
                            <table class="tabla">
                                <thead>
                                    <tr>
                                        <th>Tipo de Libreria</th>
                                        <th>Materia</th>
                                        <th>Editorial</th>
                                        <th>Grado</th>
                                        <th>Codigo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($m)){
                                            foreach($m as $f){
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo $f[2];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $f[3]; 
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $f[4];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $f[5]; 
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $f[6]; 
                                                    echo "</td>";
                                                echo "</tr>";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div> 
                    </form>           
                </div>
            </div>
        </div>
    </div>
    <footer><h5>Junio, 2023</h5></footer>
</body>
</html>