<!DOCTYPE html>
<html lang="es">
<?php require_once("comunes/head.php"); ?>
<body>
    <?php require_once("comunes/cinta.php"); ?>
    <div class="cuerpo">
        <?php require_once("comunes/nav.php"); ?>
        <div class="contenedor">
                <div class="titulo">
                    <h2>Estadistica</h2> 
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
                            <div class="lista list">
                                <table class="tabla">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Libros en Existencia</th>
                                        </tr>
                                        <tr>
                                            <th>Materia</th>
                                            <th style="width: 100px">Tolat</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php
                                                if(isset($t_libros)){
                                                    foreach ($t_libros as $f) {
                                                        echo "<tr>";
                                                            echo "<td>";
                                                                echo $f[0];
                                                            echo "</td>";
                                                            echo "<td style='text-align: center;'>";
                                                                echo $f[1];
                                                            echo "</td>";
                                                        echo "</tr>";
                                                        }
                                                    }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total de Libros</th>
                                            <?php
                                                if(isset($t_l)){
                                                    foreach ($t_l as $f) {
                                                            echo "<td style='text-align: center;'>";
                                                                echo $f[0];
                                                            echo "</td>";
                                                    }
                                                }
                                            ?>
                                            </tr>
                                        </tfoot>
                                </table>
                            </div>
                            <div class="lista list">
                                <table class="tabla">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Libros por Año</th>
                                        </tr>
                                        <tr>
                                            <th>Grado</th>
                                            <th style="width: 100px">Tolat</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php
                                                if(isset($t_nivel)){
                                                    foreach ($t_nivel as $f) {
                                                        echo "<tr>";
                                                            echo "<td>";
                                                                echo $f[0];
                                                            echo "</td>";
                                                            echo "<td style='text-align: center;'>";
                                                                echo $f[1];
                                                            echo "</td>";
                                                        echo "</tr>";
                                                        }
                                                    }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total de Libros</th>
                                            <?php
                                                if(isset($t_l)){
                                                    foreach ($t_l as $f) {
                                                            echo "<td style='text-align: center;'>";
                                                                echo $f[0];
                                                            echo "</td>";
                                                    }
                                                }
                                            ?>
                                            </tr>
                                        </tfoot>
                                </table>
                            </div>
                            <div class="lista list">
                                <table class="tabla">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Libros por Categoria</th>
                                        </tr>
                                        <tr>
                                            <th>Tipo de Libreria</th>
                                            <th style="width: 100px">Tolat</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php
                                                if(isset($t_libreria)){
                                                    foreach ($t_libreria as $f) {
                                                        echo "<tr>";
                                                            echo "<td>";
                                                                echo $f[0];
                                                            echo "</td>";
                                                            echo "<td style='text-align: center;'>";
                                                                echo $f[1];
                                                            echo "</td>";
                                                        echo "</tr>";
                                                        }
                                                    }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total de Libros</th>
                                            <?php
                                                if(isset($t_l)){
                                                    foreach ($t_l as $f) {
                                                            echo "<td style='text-align: center;'>";
                                                                echo $f[0];
                                                            echo "</td>";
                                                    }
                                                }
                                            ?>
                                            </tr>
                                        </tfoot>
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