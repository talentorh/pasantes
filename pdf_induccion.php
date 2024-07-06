<?php
error_reporting(0);
require 'fpdf186/fpdf.php';

class PDF extends FPDF{
    function header(){
        $this->Image('img/hraei.png',60,8,100,20);
    }

    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF ("P", "mm", "LETTER");
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->ln(20);   
$pdf->SetFont('Arial','B',10);
$pdf->cell(191,7,mb_convert_encoding('GUÍA DE INDUCCIÓN AL ÁREA Y PUESTO DE PERSONAL EN EL PUESTO','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(191,7, mb_convert_encoding('MÉDICO ESPECIALISTA HOSPITAL','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->ln(3);
$pdf->SetFont('Arial','',8);
$pdf->Cell(34,5,'Nombre del trabajador:',0,0,'L',0);
$pdf->cell(30);
$pdf->Cell(15,5,'CURP:',0,0,'L',0);
$pdf->Cell(50);
$pdf->Cell(15,5,'Puesto:',0,1,'L',0); 
$pdf->Cell(60,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,0,'L',0);
$pdf->Cell(5);
$pdf->Cell(60,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,0,'L',0);
$pdf->Cell(5);
$pdf->Cell(60,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'L',0);
$pdf->ln(3);
$pdf->Cell(15,5,'Adscripcion',0,0,'L',0);
$pdf->cell(49);
$pdf->cell(15,5,'RFC:',0,0,'L',0);
$pdf->cell(50);
$pdf->cell(15,5,'CLUES:',0,1,'L',0);
$pdf->cell(60,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,0,'L',0);
$pdf->cell(5);
$pdf->cell(60,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,0,'L',0);
$pdf->cell(5);
$pdf->cell(60,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'L',0);
$pdf->ln(3);
$pdf->SetFont('Arial','B',10);
$pdf->cell(36,7,'Tipo de movimiento:',0,1,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(15,5,$registros['ingreso'],1,1,'C',0);
$pdf->ln(3);
$pdf->SetFont('Arial','B',8);
$pdf->cell(53,7,mb_convert_encoding('Inducción a la unidad de adscripción:','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(5,5,$registros['dar_bienvenida'],1,0,'C',0);
$pdf->cell(125,5,'1. Dar la bienvenida a el trabajador/a de nuevo ingreso a Servicios de Salud IMSS-BIENESTAR',0,1,'L',0);
$pdf->cell(5,5,$registros['explique_organizacion'],1,0,'C',0);
$pdf->cell(90,5,mb_convert_encoding('2. Explique la organización de la Unidad con el apoyo del organigrama','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registros['realice_recorrido'],1,0,'C',0);
$pdf->cell(75,5,'3. Realice un recorrido por las instalaciones de la unidad',0,1,'L',0);
$pdf->cell(5,5,$registros['presente_trabajador'],1,0,'C',0);
$pdf->cell(130,5,mb_convert_encoding('4. Presente al trabajador/a con los y las responsables de otras áreas, en caso de tener trato con ellos','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->SetFont('Arial','B',8);
$pdf->ln(3);
$pdf->cell(40,7,mb_convert_encoding('Inducción al área de trabajo:','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(5,5,$registros['describa_brevemente'],1,0,'C',0);
$pdf->cell(113,5,mb_convert_encoding('1. Describa brevemente el área de trabajo y los procesos en los que están involucrados','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registros['presente_grupo'],1,0,'C',0);
$pdf->cell(85,5,mb_convert_encoding('2. Presente a las compañeras y compañeros del grupo de trabajo','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registros['propicie_ambiente'],1,0,'C',0);
$pdf->cell(80,5,mb_convert_encoding('3. Propicie un ambiente de cordialidad e integración de equipo','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registros['comente_condiciones'],1,0,'C',0);
$pdf->cell(88,5,mb_convert_encoding('4. Comente condiciones generales del trabajo de IMSS-BIENESTAR','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->ln(3);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,7,mb_convert_encoding('Inducción al puesto:','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(5,5,$registros['explique_mision'],1,0,'C',0);
$pdf->cell(43,5,mb_convert_encoding('1. Explique la misión del puesto','ISO-8859-1'),0,1,'L',0);
$pdf->cell(5,5,$registros['senale_vision'],1,0,'C',0);
$pdf->cell(57,5,mb_convert_encoding('2. Señale la visión que se desea del puesto','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registros['muestra_ubicacion'],1,0,'C',0);
$pdf->cell(100,5,mb_convert_encoding('3. Muestra la ubicación del puesto de trabajo y su correspondencia estructural','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registros['explique_formatos'],1,0,'C',0);
$pdf->cell(55,5,mb_convert_encoding('4. Explique los formatos y el uso de estos','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registros['capacite_utilizacion'],1,0,'C',0);
$pdf->cell(80,5,mb_convert_encoding('5. Capacite en la utilización de equipos y materiales de trabajo','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registros['explique_instrucciones'],1,0,'C',0);
$pdf->cell(78,5,mb_convert_encoding('6. Explique las instrucciones básicas de seguridad e higiene','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(5,5,$registro['motive_trabajador'],1,0,'C',0);
$pdf->multicell(186,5,mb_convert_encoding('7. Motive al trabajador/a para que formule preguntas y aclare dudas sobre sus actividades y las necesidades o expectativas a cubrir con relación a su puesto','ISO-8859-1','UTF-8'),0,'L',0);

$pdf->Output('Formato.pdf', 'I');
?>