<?php
require_once "conexion.php";
$estado='success';
$atender = mysqli_query($link, "INSERT INTO atender(id_reclamo,nombre_usuario,dni_usuario,detalle_solucion) 
VALUES('{$_POST['id_reclamo']}', '{$_POST['persona']}','{$_POST['dni']}','{$_POST['detalle']}')");
$lista = mysqli_query($link,"UPDATE  reclamo SET estado='$estado' WHERE id_reclamo = {$_POST['id_reclamo']}");
