<?php
require_once "conexion.php";
$estado='warning';
$atender = mysqli_query($link, "INSERT INTO notificar(id_reclamo,nombre_usuario,dni_usuario,detalle_solucion,fecha) 
VALUES('{$_POST['id_reclamo']}', '{$_POST['persona']}','{$_POST['dni']}','{$_POST['detalle']}','{$_POST['fecha']}')");
$lista = mysqli_query($link,"UPDATE  reclamo SET estado='$estado' WHERE id_reclamo = {$_POST['id_reclamo']}");
