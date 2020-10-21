<?php 
require_once "conexion.php";
require_once "../fpdf/fpdf.php";
$reclamo = mysqli_query($link,"SELECT id_reclamo ,fecha ,detalles,autoriza,id_tercero,nombre_usuario,numero_documento,tipo_documento,domicilio_usuario,email,telefono,nombre, nombre_area FROM usuario 
INNER JOIN reclamo ON  usuario.numero_documento = reclamo.id_usuario 
INNER JOIN unidad ON reclamo.id_unidad = unidad.id
LEFT JOIN area ON area.id = reclamo.id_area WHERE reclamo.id_reclamo = {$_POST['id']}");
$respuesta = mysqli_fetch_all($reclamo,MYSQLI_ASSOC);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('../img/hrdac.png',10,10,60 );
$pdf->Image('../img/susalud.png',140,10,60 );
$pdf->SetFont('Arial','B',20);
$pdf->Ln(28);
$pdf->Cell(185, 10, 'HOJA DE RECLAMACION EN SALUD ', 0,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Ln(12);
$pdf->SetFillColor(133,193,233);
$pdf->Cell(120, 11,'IPRESS:  HOSPITAL REGIONAL DANIEL ALCIDES CARRION - PASCO', 1,0,'C',1);
$pdf->SetFillColor(249,231,159);
$pdf->Cell(70, 33,'N DE HOJA '.$respuesta[0]['id_reclamo'], 1,0,'C',1);
$pdf->Ln(11);
$pdf->Cell(120, 11,'DIRECCION:  AV. LOS INCAS S/N. SAN JUAN - YANACANCHA-PASCO', 1,0,'C');
$pdf->Ln(11);
$pdf->Cell(120, 11,'FECHA: '.$respuesta[0]['fecha'], 1,0,'C');
$pdf->Ln(15);
$pdf->SetFillColor(214,234,248);
$pdf->Cell(190, 5,'IDENTIFICACION DEL USUARIO O TERCERO LEGITIMADO ', 1,0,'L',1);
$pdf->Ln(5);
$pdf->Cell(95, 14,'TIPO DE DOCUMENTO: '.$respuesta[0]['tipo_documento'], 1,0,'L');
$pdf->Cell(95, 14,'NUMERO DE DOCUMENTO:  '.$respuesta[0]['numero_documento'], 1,0,'L');
$pdf->Ln(14);
$pdf->Cell(95, 14,'NOMBRE O RAZON SOCIAL: '.$respuesta[0]['nombre_usuario'], 1,0,'L');
$pdf->Cell(95, 14,'EMAIL: '.$respuesta[0]['email'], 1,0,'L');
$pdf->Ln(14);
$pdf->Cell(95, 14,'DOMICILIO: '.$respuesta[0]['domicilio_usuario'], 1,0,'L');
$pdf->Cell(95, 14,'TELEFONO: '.$respuesta[0]['telefono'], 1,0,'L');
$pdf->Ln(14);
if(!empty($respuesta[0]['id_tercero'])){
    $resp = mysqli_query($link,"SELECT * FROM tercero WHERE numero_tercero = {$respuesta[0]['id_tercero']}");
    $tercero = mysqli_fetch_all($resp,MYSQLI_ASSOC);
    $pdf->SetFillColor(233,233,233);
    $pdf->Cell(190, 5,'IDENTIFICACION DE QUIEN PRESENTA EL RECLAMO ', 1,0,'L',1);
    $pdf->Ln(5);
    $pdf->Cell(95, 14,'TIPO DE DOCUMENTO: '.$tercero[0]['tipo_tercero'], 1,0,'L');
    $pdf->Cell(95, 14,'NUMERO DE DOCUMENTO:  '.$tercero[0]['numero_tercero'], 1,0,'L');
    $pdf->Ln(14);
    $pdf->Cell(95, 14,'NOMBRE O RAZON SOCIAL: '.$tercero[0]['nombre_tercero'], 1,0,'L');
    $pdf->Cell(95, 14,'EMAIL: '.$tercero[0]['email_tercero'], 1,0,'L');
    $pdf->Ln(14);
    $pdf->Cell(95, 14,'DOMICILIO: '.$tercero[0]['domicilio_tercero'], 1,0,'L');
    $pdf->Cell(95, 14,'TELEFONO: '.$tercero[0]['telefono_tercero'], 1,0,'L');
    $pdf->Ln(14);
}
$pdf->SetFillColor(233,233,233);
$pdf->Cell(190, 5,'DETALLE DEL RECLAMO ', 1,0,'L',1);
$pdf->Ln(5);
$pdf->Cell(95, 14,'UNIDAD O SERVICIO: '.$respuesta[0]['nombre'], 1,0,'L');
$pdf->Cell(95, 14,'AREA: '.$respuesta[0]['nombre_area'], 1,0,'L');
$pdf->Ln(14);
$pdf->Cell(190, 30,'DETALLE DEL RECLAMO: '.$respuesta[0]['detalles'], 1,0,'L');
$pdf->Ln(30);
$pdf->SetFillColor(214,234,248);
$pdf->Cell(125, 8,'AUTORIZO NOTIFICACION DEL RESULTADO DEL RECLAMO AL EMAIL CONSIGNADO ', 1,0,'L',1);
$pdf->Cell(65, 8,$respuesta[0]['autoriza'], 1,0,'C');
$pdf->Ln(10);
$pdf->Cell(188, 10, 'Destinatario ( Responsable de atender las reclamaciones y SUSALUD si es solicitada) ', 0,0,'C');
$pdf->Output();

