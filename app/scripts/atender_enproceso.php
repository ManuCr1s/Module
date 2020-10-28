<?php
require_once "conexion.php";
$estado='success';
$atender = mysqli_query($link, "INSERT INTO resultado(id_reclamo,nombre_responsable,dni_responsable,detalle_analisis,detalle_resultado,conclusion) 
VALUES('{$_POST['id_reclamo']}', '{$_POST['persona']}','{$_POST['dni']}','{$_POST['hechos']}','{$_POST['detalle']}','{$_POST['conclusion']}')");
$lista = mysqli_query($link,"UPDATE  reclamo SET estado='$estado' WHERE id_reclamo = {$_POST['id_reclamo']}");
