<?php
require_once "conexion.php";
$lista = mysqli_query($link,"SELECT id_reclamo ,fecha ,estado, nombre_usuario FROM reclamo LEFT JOIN usuario ON reclamo.id_usuario = numero_documento WHERE estado = 'danger'");
//$respuesta = mysqli_fetch_all($lista,MYSQLI_ASSOC);
if(!($lista->num_rows > 0)){
  $arreglo = [0 =>'No hay registros'];
  echo json_encode($arreglo);
}else{
  while( $data = mysqli_fetch_assoc($lista)){
    $arreglo['data'][] = $data;
  }
  echo json_encode($arreglo);
}