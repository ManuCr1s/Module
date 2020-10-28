<?php
require_once "conexion.php";
$lista = mysqli_query($link,"SELECT id_reclamo ,fecha ,detalles,nombre_usuario,numero_documento,nombre, nombre_area FROM usuario 
INNER JOIN reclamo ON  usuario.numero_documento = reclamo.id_usuario 
INNER JOIN unidad ON reclamo.id_unidad = unidad.id
LEFT JOIN area ON area.id = reclamo.id_area WHERE estado = 'warning'");
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
