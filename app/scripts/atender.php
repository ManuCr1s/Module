<?php
require_once "conexion.php";
$lista = mysqli_query($link,"UPDATE  reclamo SET estado='{$_POST['estado']}' WHERE id_reclamo= {$_POST['id']} ");