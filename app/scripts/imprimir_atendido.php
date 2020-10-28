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
$pdf->SetFont('Arial','B',8);
$pdf->Ln(12);
$pdf->SetFillColor(183,213,239);
$pdf->Cell(190, 43,'', 0,0,'C',1);
$pdf->Ln(5);
$pdf->SetFillColor(255,255,255);
$pdf->SetX(15);
$pdf->Cell(110, 11,'IPRESS:  HOSPITAL REGIONAL DANIEL ALCIDES CARRION - PASCO', 0,0,'C',1);
$pdf->SetX(140);
$pdf->Cell(50, 33,'HOJA EN RECLAMACION', 0,0,'C',1);
$pdf->Ln(11);
$pdf->SetX(15);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(110, 11,'DIRECCION:  AV. LOS INCAS S/N. SAN JUAN - YANACANCHA-PASCO', 0,0,'C',1);
$pdf->Ln(11);
$pdf->SetX(15);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(110, 11,'FECHA: '.$respuesta[0]['fecha'], 0,0,'C',1);
$pdf->Ln(15);
$pdf->SetFillColor(224,225,226);
$pdf->Cell(190, 65,'', 0,0,'C',1);
$pdf->Ln(3);
$pdf->SetX(15);
$pdf->Cell(170, 5,'1. IDENTIFICACION DEL USUARIO O TERCERO LEGITIMADO ', 0,0,'L',1);
$pdf->Ln(7);
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',7);
$pdf->SetX(15);
$pdf->Cell(90, 5,'TIPO DE DOCUMENTO: ', 0,0,'L',1);
$pdf->SetX(105);
$pdf->Cell(90, 5,'NUMERO DE DOCUMENTO: ', 0,0,'L',1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',7);
$pdf->SetX(15);
$pdf->Cell(90, 7,strtoupper($respuesta[0]['tipo_documento']), 0,0,'C',1);
$pdf->SetX(105);
$pdf->Cell(90, 7,$respuesta[0]['numero_documento'], 0,0,'C',1);
$pdf->Ln(7);

$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',7);
$pdf->SetX(15);
$pdf->Cell(90, 5,'NOMBRE O RAZON SOCIAL: ', 0,0,'L',1);
$pdf->SetX(105);
$pdf->Cell(90, 5,'EMAIL: ', 0,0,'L',1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',7);
$pdf->SetX(15);
$pdf->Cell(90, 7,strtoupper($respuesta[0]['nombre_usuario']), 0,0,'C',1);
$pdf->SetX(105);
$pdf->Cell(90, 7,$respuesta[0]['email'], 0,0,'C',1);
$pdf->Ln(7);

$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',7);
$pdf->SetX(15);
$pdf->Cell(90, 5,'DOMICILIO: ', 0,0,'L',1);
$pdf->SetX(105);
$pdf->Cell(90, 5,'TELEFONO: ', 0,0,'L',1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',7);
$pdf->SetX(15);
$pdf->Cell(90, 7,strtoupper($respuesta[0]['domicilio_usuario']), 0,0,'C',1);
$pdf->SetX(105);
$pdf->Cell(90, 7,$respuesta[0]['telefono'], 0,0,'C',1);
$pdf->Ln(10);


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
}else {
    $pdf->SetFont('Arial','B',8);
    $pdf->SetFillColor(183,213,239);
    $pdf->Cell(190, 65,'', 0,0,'C',1);
    $pdf->Ln(3);
    $pdf->SetX(15);
    $pdf->Cell(170, 5,'2. IDENTIFICACION DE QUIEN PRESENTA EL RECLAMO (En caso der el usuario afectado no es necesario su llenado) ', 0,0,'L',1);
    $pdf->Ln(7);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont('Arial','B',7);
    $pdf->SetX(15);
    $pdf->Cell(90, 5,'TIPO DE DOCUMENTO: ', 0,0,'L',1);
    $pdf->SetX(105);
    $pdf->Cell(90, 5,'NUMERO DE DOCUMENTO: ', 0,0,'L',1);
    $pdf->Ln(5);
    $pdf->SetFont('Arial','',7);
    $pdf->SetX(15);
    $pdf->Cell(90, 7,"", 0,0,'C',1);
    $pdf->SetX(105);
    $pdf->Cell(90, 7,"", 0,0,'C',1);
    $pdf->Ln(7);

    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont('Arial','B',7);
    $pdf->SetX(15);
    $pdf->Cell(90, 5,'NOMBRE O RAZON SOCIAL: ', 0,0,'L',1);
    $pdf->SetX(105);
    $pdf->Cell(90, 5,'EMAIL: ', 0,0,'L',1);
    $pdf->Ln(5);
    $pdf->SetFont('Arial','',7);
    $pdf->SetX(15);
    $pdf->Cell(90, 7,"", 0,0,'C',1);
    $pdf->SetX(105);
    $pdf->Cell(90, 7,"", 0,0,'C',1);
    $pdf->Ln(7);

    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont('Arial','B',7);
    $pdf->SetX(15);
    $pdf->Cell(90, 5,'DOMICILIO: ', 0,0,'L',1);
    $pdf->SetX(105);
    $pdf->Cell(90, 5,'TELEFONO: ', 0,0,'L',1);
    $pdf->Ln(5);
    $pdf->SetFont('Arial','',7);
    $pdf->SetX(15);
    $pdf->Cell(90, 7,"", 0,0,'C',1);
    $pdf->SetX(105);
    $pdf->Cell(90, 7,"", 0,0,'C',1);
    $pdf->Ln(10);
}

$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(224,225,226);
$pdf->Cell(190, 65,'', 0,0,'C',1);
$pdf->Ln(3);
$pdf->SetX(15);
$pdf->Cell(170, 5,'3. DETALLE DEL RECLAMO', 0,0,'L',1);
$pdf->Ln(7);
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',7);
$pdf->SetX(15);
$pdf->Cell(90, 5,'UNIDAD O SERVICIO: ', 0,0,'L',1);
$pdf->SetX(105);
$pdf->Cell(90, 5,'AREA: ', 0,0,'L',1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',6);
$pdf->SetX(15);
$pdf->Cell(90, 7,utf8_decode($respuesta[0]['nombre']), 0,0,'L',1);
$pdf->SetX(105);
$pdf->Cell(90, 7,utf8_decode($respuesta[0]['nombre_area']), 0,0,'L',1);
$pdf->Ln(7);

$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',7);
$pdf->SetX(15);
$pdf->Cell(180, 5,'DETALLE DEL RECLAMO: ', 0,0,'L',1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',7);
$pdf->SetX(15);
$pdf->MultiCell(180,4,utf8_decode($respuesta[0]['detalles']),0,'J',1);
$pdf->Ln(4);

$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(183,213,239);
$pdf->Cell(190, 5,'', 0,0,'C',1);
$pdf->SetX(15);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(110, 5,'4. AUTORIZO NOTIFICACION DEL RESULTADO DEL RECLAMO AL EMAIL CONSIGNADO ', 0,0,'L',1);
$pdf->Cell(65, 5," ".strtoupper($respuesta[0]['autoriza']), 0,0,'R');
$pdf->Ln(5);

$pdf->SetFillColor(233,233,233);
$pdf->SetFont('Arial','B',6);
$pdf->MultiCell(190, 3, utf8_decode('Las IAFAS, IPRESS o UGIPRESS deben atender el reclamo en plazo de 30 días hábiles."Estimado usuario: Usted puede presentar su queja ante SUSALUD cuando no le hayan brindado un servicio, prestación o cobertura solicitada, o recibida de las IAFAS o IPRESS, o que dependan de las UGIPRESS públicas, privadas o mixtas. También ante la negativa de atención de su reclamo, irregularidad en su tramitación o disconformidad con el resultado del mismo". '), 0,'J',1);


$pdf->Output();

