<?php
$link = mysqli_connect('127.0.0.1','root','','reclamacion');
$lista = mysqli_num_rows(mysqli_query($link,"SELECT id_reclamo,fecha,id_unidad,detalles,estado FROM reclamo"));
$danger = mysqli_num_rows(mysqli_query($link,"SELECT id_reclamo,fecha,id_unidad,detalles,estado FROM reclamo WHERE estado = 'danger'"));
$warning = mysqli_num_rows(mysqli_query($link,"SELECT id_reclamo,fecha,id_unidad,detalles,estado FROM reclamo WHERE estado = 'warning'"));
$success = mysqli_num_rows(mysqli_query($link,"SELECT id_reclamo,fecha,id_unidad,detalles,estado FROM reclamo WHERE estado = 'success'"));
$valores = [$lista,$danger,$warning,$success];
