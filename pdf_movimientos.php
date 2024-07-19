<?php

require 'fpdf186/fpdf.php';

class PDF extends FPDF{
       
}

$pdf = new PDF("P", "mm", array(215,335));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,2,205,2);//linea arriba recuadro formato
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,2,10,32);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(205,2,205,32);//linea derecha recuadro formato
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,32,205,32);
$pdf->image('img/imss_bienestar.png',12,3,35,13);
$pdf->SetFont('Arial','B',6);
$pdf->Ln(-5);
$pdf->cell(60);  
$pdf->cell(80,0,'FORMATO DE MOVIMIENTOS DE PERSONAL',0,1,'C',0);
$pdf->cell(48);
$pdf->cell(100,5,mb_convert_encoding('RAMA MEDICA, PARAMÉDICA, AFIN, AFIN ADMINISTRATIVA Y CONFIANZA','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->image('img/logo_hraei.png',183,3,21,15);
$pdf->SetFont('Arial','B',5.5);
$pdf->Cell(47);
$pdf->cell(20,7,'UNIDAD EXPEDIDORA:',0,0,'C',0);
$pdf->cell(6);
$pdf->cell(95,7,'COMISION COORDINADORA DE INSTITUTOS NACIONALES DE SALUD Y HOSPITALES DE ALTA ESPECIALIDAD',0,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(130);
$pdf->cell(20,7,'HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA',0,0,'C',0);
$pdf->SetFont('Arial','B',5.5);
$pdf->ln(4);
$pdf->Cell(5);
$pdf->multicell(35,2,mb_convert_encoding('SUBSECRETARIA DE ADMINISTRACIÓN Y FINANZAS','ISO-8859-1','UTF-8'),0,'C',0);
$pdf->ln(1);
$pdf->Cell(38);
$pdf->cell(48,1,mb_convert_encoding('LUGAR Y FECHA DE EXPEDICIÓN:','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->ln(-3);
$pdf->Cell(127);
$pdf->cell(20,7,'IXTAPALUCA, EDO. DE MEX., A 1 DE ENERO DE 2024',0,0,'C',0);
$pdf->ln(10);
$pdf->cell(90);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(90, 23, 205, 23);//linea nombre hospital dentro del recuadro de formato 
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(100, 29, 190, 29);//linea lugar y fecha dentro  del recuadro de formato
$pdf->cell(12);
$pdf->cell(120,1,'',0,1,'C',0);
$pdf->SetFillColor(7,122,245);
$pdf->SetFont('Arial','B',6);
$pdf->SetLineWidth(0.3); 
$pdf->cell(195,3,'DATOS PERSONALES',1,1,'C',1);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,37,10,86);//linea izquierda recuadro datos personales
$pdf->SetFont('Arial','',6);
$pdf->cell(15,5,mb_convert_encoding('RFC','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(70);
$pdf->cell(8,5,'CURP',0,1,'L',0);
$pdf->cell(1);
$pdf->SetFont('Arial','B',7.5);
$rfc = "VAAA920508253";
$digitos = str_split($rfc);
$cellWidth = 6;
$cellHeight = 4; 
foreach ($digitos as $digito) {
    $pdf->SetLineWidth(0.3); 
    $pdf->cell($cellWidth, $cellHeight, $digito, 1, 0, 'C', 0);
}
$pdf->cell(7);
//código para poder extraer cada digito del curp y poder colocar cada digito en cada recuadro
$curp = "VAAA920508HDFZRL03";
$digitos = str_split($curp);
$cellWidth = 6;
$cellHeight = 4;
foreach ($digitos as $digito) {
    $pdf->cell($cellWidth, $cellHeight, $digito, 1, 0, 'C', 0);
}
$pdf->ln(8);
$pdf->cell(10);
$pdf->cell(50,5,mb_convert_encoding('texto prueba apellido paterno','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(10);
$pdf->cell(55,5,mb_convert_encoding('texto prueba apellido materno','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(10);
$pdf->cell(60,5,mb_convert_encoding('texto prueba nombre','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(20, 54, 70, 54);//linea apellido p datos personales
$pdf->SetLineWidth(0);
$pdf->SetFont('Arial','B',6);
$pdf->cell(11);
$pdf->cell(50,1,'APELLIDO PATERNO',0,0,'C',0);
$pdf->cell(11);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(80, 54, 135, 54);//linea apellido m datos personales
$pdf->SetLineWidth(0);
$pdf->cell(50,1,'APELLIDO MATERNO',0,0,'C',0);
$pdf->cell(3);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(145, 54, 205, 54);//linea nombre datos personales
$pdf->cell(85,1,'NOMBRE(S)',0,1,'C',0);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',5);
$pdf->cell(23,1,'DOMICILIO PARTICULAR',0,1,'C',0);
$pdf->SetFont('Arial','B',6);
$pdf->cell(85,5,mb_convert_encoding('texto prueba de calle','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(50,5,'texto prueba de numero exterior',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(50,5,'texto prueba de numero interior',0,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 63, 95, 63);//linea calle datos personales
$pdf->SetLineWidth(0);
$pdf->cell(85,1,'CALLE',0,0,'C',0);
$pdf->cell(5);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(100, 63, 150, 63);//linea num exterior datos personales
$pdf->SetLineWidth(0);
$pdf->cell(50,1,mb_convert_encoding('NÚMERO EXTERIOR','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(155, 63, 205, 63); //linea num interior datos personales
$pdf->SetLineWidth(0);
$pdf->cell(50,1,mb_convert_encoding('NÚMERO INTERIOR','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(42,5,mb_convert_encoding('texto prueba de colonia','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,'prueba codigo p',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(40,5,mb_convert_encoding('prueba delegacion ','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,mb_convert_encoding('prueba estado ','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,'prueba telefono',0,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 71, 52, 71);//linea de colonia datos personales
$pdf->cell(42,5,'COLONIA',0,0,'C',0);
$pdf->cell(5);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(57, 71, 88, 71);//linea de codigo postal datos personales
$pdf->SetLineWidth(0);
$pdf->cell(31,5,mb_convert_encoding('CÓDIGO POSTAL','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(93, 71, 133, 71);//linea de delegacion/municipio datos personales
$pdf->SetLineWidth(0);
$pdf->cell(40,5,mb_convert_encoding('DELEGACIÓN O MUNICIPIO','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(138, 71, 169, 71);//linea de estado datos personales
$pdf->SetLineWidth(0);
$pdf->cell(31,5,'ESTADO',0,0,'C',0);
$pdf->cell(5);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(174, 71, 205, 71);//linea de telefono datos personales
$pdf->cell(31,5,mb_convert_encoding('TELÉFONO','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(80,5,'prueba de cuenta bancaria',0,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 81, 90, 81);//linea cuenta bancaria datos personales
$pdf->cell(80,5,mb_convert_encoding('CUENTA BANCARIA NÚMERO','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(205, 37, 205, 86);//linea derecha recuadro datos personales
$pdf->ln(1);
$pdf->SetLineWidth(0.3); 
$pdf->cell(28,3,mb_convert_encoding('GÉNERO','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(30,3,'ESTADO CIVIL',1,0,'C',1);
$pdf->cell(50,3,'LUGAR DE NACIMIENTO (ESTADO)',1,0,'C',1);
$pdf->cell(35,3,'FECHA DE INGRESO',1,0,'C',1);
$pdf->cell(7,3,mb_convert_encoding('DÍA','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(8,3,'MES',1,0,'C',1);
$pdf->cell(9,3,mb_convert_encoding('AÑO','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(28,3,'CODEPENDENCIA',1,1,'C',1);
$pdf->cell(28,10.5,'Texto prueba de genero',1,0,'C',0);
$pdf->cell(30,10.5,'Texto prueba de estado civil',1,0,'C',0);
$pdf->cell(50,10.5,mb_convert_encoding('Texto prueba de lugar de nacimiento','ISO-8859-1','UTF-8'),1,0,'C',0);
$pdf->MultiCell(35,1.5,'
GOBIERNO FEDERAL

SSA

HRAE IXTAPALUCA

',1,'L',0);
$pdf->Ln(-10.5);
$pdf->Cell(143);
$pdf->Cell(7,3.5,'',1,0,'C',0);
$pdf->cell(8,3.5,'',1,0,'C',0);
$pdf->cell(9,3.5,'',1,0,'C',0);
$pdf->cell(28,10.5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->Ln(-6.9);
$pdf->Cell(143);
$pdf->cell(7,3.5,'',1,0,'C');
$pdf->cell(8,3.5,'',1,0,'C',0);
$pdf->cell(9,3.5,'',1,0,'C',0);
$pdf->Ln(3.4);
$pdf->Cell(143);
$pdf->cell(7,3.5,'10',1,0,'C');
$pdf->cell(8,3.5,'01',1,0,'C',0);
$pdf->cell(9,3.5,'2024',1,0,'C',0);
$pdf->cell(28,3.5,'HARE Ixtapaluca',1,0,'C',0);
$pdf->ln(5.5);
$pdf->SetFont('Arial','B',7);
$pdf->cell(195,3,'DATOS PRESUPUESTALES',1,1,'C',1);
$pdf->SetFont('Arial','B',6);
$pdf->cell(40,5,'ANTECEDENTE',1,0,'L',1);
$pdf->cell(10,5,'A. P',1,0,'C',1);
$pdf->cell(13,5,'UNIDAD',1,0,'C',1);
$pdf->cell(15,5,'PARTIDA',1,0,'C',1);
$pdf->cell(15,5,mb_convert_encoding('CÓDIGO','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(10,5,'P. A',1,0,'C',1);
$pdf->cell(10,5,'A. I',1,0,'C',1);
$pdf->cell(10,5,'G. P',1,0,'C',1);
$pdf->cell(21,5,mb_convert_encoding('FUNCIÓN','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(21,5,mb_convert_encoding('SUBFUNCIÓN','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(30,5,'PUESTO',1,1,'C',1);
$pdf->cell(40,5,'CLAVE ANTERIOR',1,0,'L',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,191,10,212);//linea izquierda recuadro vigencia/operacion
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,212,205,212);//linea abajo recuadro vigencia/operacion
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(205,200,205,212);//linea derecha recuadro vigencia/operacion
$pdf->SetLineWidth(0.3); 
$pdf->cell(10,5,'texto ap',1,0,'C',0);
$pdf->cell(13,5,'texto u',1,0,'C',0);
$pdf->cell(15,5,'texto p',1,0,'C',0);
$pdf->cell(15,5,mb_convert_encoding('texto c','ISO-8859-1','UTF-8'),1,0,'C',0);
$pdf->cell(10,5,'texto pa',1,0,'C',0);
$pdf->cell(10,5,'texto ai',1,0,'C',0);
$pdf->cell(10,5,'texto gp',1,0,'C',0);
$pdf->cell(21,5,mb_convert_encoding('texto funcion','ISO-8859-1','UTF-8'),1,0,'C',0);
$pdf->cell(21,5,mb_convert_encoding('texto subfuncion','ISO-8859-1','UTF-8'),1,0,'C',0);
$pdf->cell(30,5,'texto puesto',1,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(45,119,175,119);//linea de adscripcion
$pdf->cell(30,5,mb_convert_encoding('ADSCRIPCIÓN','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(45,124,175,124);//linea de clave anterior
$pdf->cell(33,5,'CLAVE ANTERIOR',0,1,'C',0);
$pdf->cell(68,5,'CLAVE DEL CENTRO DE RESPONSABILIDAD',0,0,'C',0);
//recuadros para colocar clave de centro de responsabilidad
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,1,'C',0);
$pdf->ln(3);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,114,10,130);//linea  izquierda para el recuadro de datos presupuestales
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,130,205,130);//linea de abajo de recuadro de datos presupuestales
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(205,114,205,130);//linea derecha de recuadro datos presupuestales
$pdf->SetLineWidth(0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,132,205,132);//linea arriba recuadro datos del sustituto
$pdf->cell(35,3,'DATOS DEL SUSTITUTO',0,1,'L',0);
$pdf->cell(62,5,'prueba apellido p',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(62,5,'prueba apellido m',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(63,5,'prueba nombre',0,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 139, 72, 139);//linea de apellido p
$pdf->cell(62,1,'APELLIDO PATERNO',0,0,'C',0);
$pdf->cell(4);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(77, 139, 138, 139);//linea de apellido m
$pdf->cell(62,1,'APELLIDO MATERNO',0,0,'C',0);
$pdf->cell(4);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(144, 139, 205, 139);//linea de nombre
$pdf->cell(63,1,'NOMBRE(S)',0,1,'C',0);
$pdf->Ln(1);
$pdf->cell(20,5,mb_convert_encoding('FILIACIÓN','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(5);
$pdf->SetLineWidth(0.3);
//recuadros para colocar filiacion
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(69);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 244, 205, 244);//linea de abajo recuadro clave presupuestas
$pdf->SetLineWidth(0);
$pdf->cell(15,5,'MOTIVO',0,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(172, 143, 172, 164);//linea izquierda recuadro motivos
$pdf->SetLineWidth(0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(205, 132, 205, 164);//linea derecha recuadro datos del sustituto
$pdf->cell(168);
//recuadros para colocar motivo
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->ln(2);
$pdf->cell(20,5,'EFECTOS DEL',0,0,'L',0);
$pdf->cell(5);
//recuadros para colocar efectos del
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(5);
$pdf->cell(5,5,'AL',0,0,'C',0);
$pdf->cell(5);
//recuadros para colocar al 
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(25);
$pdf->Ln(2);
$pdf->cell(163);
$pdf->cell(35,5,'NUM. DEL DOCUMENTO',0,1,'C',0);
$pdf->cell(168);
//recuadros para colocar num del documento
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,1,'C',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 132, 10, 164);//linea izquierda recuadro datos del sustituto
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 164, 205, 164);//linea abajo recuadro de datos del sustituto
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(172, 143, 205, 143);//linea arriba recuadro de motivo
$pdf->ln(4);
$pdf->cell(42,5,'VIGENCIA',1,0,'C',1);
$pdf->cell(153,5,mb_convert_encoding('OPERACIÓN','ISO-8859-1','UTF-8'),1,1,'C',1);
$pdf->cell(12,5,'',1,0,'C',1);
$pdf->cell(10,5,mb_convert_encoding('DÍA','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(10,5,'MES',1,0,'C',1);
$pdf->cell(10,5,mb_convert_encoding('AÑO','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(35,5,'No.DOCUMENTO ',1,0,'C',1);
$pdf->cell(35,5,mb_convert_encoding('NÚMERO DE EMPLEADO','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(35,5,'TIPO DE TRABAJADOR',1,0,'C',1);
$pdf->cell(24,5,'TIPO DE PLAZA',1,0,'C',1);
$pdf->cell(24,5,'QNA',1,1,'C',1);
$pdf->cell(12,5,'DEL',1,0,'C',0);
$pdf->cell(10,5,'01',1,0,'C',0);
$pdf->cell(10,5,'01',1,0,'C',0);
$pdf->cell(10,5,'2024',1,0,'C',0);
$pdf->cell(35,10,'texto no, doc',1,0,'C',0);//poner no. documento
$pdf->cell(35,10,'texto no emp',1,0,'C',0);//poner no. empleado
$pdf->cell(35,10,'texto tipo',1,0,'C',0);//poner tipo de trabajador
$pdf->cell(24,10,'texto tipo p',1,0,'C',0);//poner tipo de plaza
$pdf->cell(24,10,'texto qna',1,1,'C',0);//poner qna
$pdf->ln(-5);
$pdf->cell(12,5,'AL',1,0,'C',0);
$pdf->cell(10,5,'01',1,0,'C',0);
$pdf->cell(10,5,'05',1,0,'C',0);
$pdf->cell(10,5,'2024',1,1,'C',0);
$pdf->multicell(21,3,'TIPO DE MOVIMIENTO',1,'L',0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,214,10,244);//linea izquierda recuadro clave presupuestas
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(205,214,205,244);//linea derecha recuadro clave presupuestas
$pdf->ln(-6);
$pdf->cell(21);
$pdf->cell(15,6,mb_convert_encoding('CÓDIGO','ISO-8859-1','UTF-8'),1,0,'C',0);
//recuadro para poner codigo
$pdf->cell(6,6,'',1,0,'C',0);
$pdf->cell(6,6,'',1,0,'C',0);
$pdf->cell(6,6,'',1,0,'C',0);
$pdf->cell(6,6,'',1,0,'C',0);
$pdf->cell(17,6,mb_convert_encoding('Adscripción','ISO-8859-1','UTF-8'),1,0,'L',0);
$pdf->cell(88,6,'HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA',1,0,'C',0);
$pdf->cell(30,6,'TIPO DE TRABAJADOR',1,1,'C',0);
//aqui es para marcar que tipo de movimiento es
$pdf->cell(25,3,'NUEVO INGRESO',0,0,'L',0);
$pdf->cell(11);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(5);
$pdf->cell(32,3,'PERIODO DE PRUEBA',0,0,'C',0);
$pdf->cell(11);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(5);
$pdf->cell(15,3,'LICENCIA',0,0,'L',0);
$pdf->cell(38);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(5);
$pdf->cell(10,3,'BASE',0,0,'C',0);
$pdf->cell(10);
$pdf->cell(7,3,'',1,1,'C',0);
$pdf->cell(15,3,'REINGRESO',0,0,'C',0);
$pdf->cell(21);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(5);
$pdf->cell(32,3,'DATOS PERSONALES',0,0,'C',0);
$pdf->cell(11);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(5);
$pdf->cell(53,3,mb_convert_encoding('CAMBIO DE RADICACIÓN DE SUELDOS','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(6);
$pdf->cell(18,3,'CONFIANZA',0,0,'L',0);
$pdf->cell(1);
$pdf->cell(7,3,'',1,1,'C',0);
$pdf->cell(20,3,mb_convert_encoding('PROMOCIÓN','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(16);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(9);
$pdf->cell(10,3,'BAJA',0,0,'L',0);
$pdf->cell(29);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(5);
$pdf->cell(20,3,mb_convert_encoding('SUSPENSIÓN','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(33);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(6);
$pdf->cell(15,3,'INTERNO',0,0,'L',0);
$pdf->cell(4);
$pdf->cell(7,3,'',1,1,'L',0);
$pdf->cell(20,3,mb_convert_encoding('REDUCCIÓN','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(16);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(9);
$pdf->cell(39,3,mb_convert_encoding('REANUDACIÓN DE LABORES','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(5);
$pdf->cell(53,3,'PREJUBILATORIA',0,0,'L',0);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(6);
$pdf->cell(19,3,'PROVISIONAL',0,0,'L',0);
$pdf->cell(7,3,'',1,1,'L',0);
$pdf->cell(36,3,mb_convert_encoding('TITULARIZACIÓN','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(9);
$pdf->cell(39,3,mb_convert_encoding('AMPLIACIÓN','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(7,3,'',1,0,'L',0);
$pdf->cell(5);
$pdf->cell(53,3,'CONTINUIDAD LABORAL',0,0,'L',0);
$pdf->cell(7,3,'',1,0,'C',0);
$pdf->cell(6);
$pdf->cell(19,3,'RESERVADA',0,0,'L',0);
$pdf->cell(7,3,'',1,1,'L',0);
$pdf->cell(169);
$pdf->multicell(23,3,'PERIODO DE PRUEBA',0,'L',0);
$pdf->ln(-6);
$pdf->cell(188);
$pdf->cell(7,3,'',1,1,'C',0);
$pdf->ln(4);
$pdf->cell(195,5,'CLAVE PRESUPUESTAS',1,1,'C',1);
$pdf->cell(22,5,'AP',1,0,'C',1);
$pdf->cell(22,5,'UNIDAD',1,0,'C',1);
$pdf->cell(22,5,'PARTIDA',1,0,'C',1);
$pdf->cell(22,5,mb_convert_encoding('CÓDIGO','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(22,5,'PN',1,0,'C',1);
$pdf->cell(21,5,'DF',1,0,'C',1);
$pdf->cell(21,5,mb_convert_encoding('FUNCIÓN','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(21,5,mb_convert_encoding('SUBFUNCIÓN','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(22,5,'PUESTO',1,1,'C',1);
$pdf->cell(44,5,'CLAVE DE RESPONSABILIDAD',0,0,'L',0);
$pdf->cell(108);
$pdf->cell(43,5,'HORARIO ASIGNADO',1,1,'C',0);
$pdf->cell(44);
//recuadros para poner clave de responsabilidad de la clave de presupuestas
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->Ln(-5);
$pdf->cell(152);
$pdf->cell(43,5,'HORARIO ASIGNADO',1,1,'C',0);
$pdf->cell(159);
$pdf->cell(14,5,'8 HORAS',0,0,'C',0);
$pdf->cell(8);
$pdf->cell(6,5,'',1,1,'C',0);
$pdf->cell(35,5,'NOMBRE DEL PUESTO',0,0,'L',0);
$pdf->cell(124);
$pdf->cell(14,5,'7 HORAS',0,0,'C',0);
$pdf->cell(8);
$pdf->cell(6,5,'',1,1,'C',0);
$pdf->cell(159);
$pdf->cell(14,5,'6 HORAS',0,0,'C',0);
$pdf->cell(8);
$pdf->cell(6,5,'',1,1,'C',0);
$pdf->ln(2);
$pdf->cell(195,5,'PERCEPCIONES',1,1,'C',1);
$pdf->cell(49,5,'PARTIDA PRESUPUESTAL',1,0,'C',1);
$pdf->cell(49,5,'ANTERIOR',1,0,'C',1);
$pdf->cell(49,5,'ACTUAL',1,0,'C',1);
$pdf->cell(48,5,'DIFERENCIA',1,1,'C',1);
$pdf->cell(49,5,'texto prueba partida',1,0,'C',0);
$pdf->cell(49,5,'texto prueba anterior',1,0,'C',0);
$pdf->cell(49,5,'texto prueba actual',1,0,'C',0);
$pdf->cell(48,5,'texto prueba diferencia',1,1,'C',0);
$pdf->cell(49,5,'texto prueba partida 2',1,0,'C',0);
$pdf->cell(49,5,'texto prueba anterior 2',1,0,'C',0);
$pdf->cell(49,5,'texto prueba actual 2',1,0,'C',0);
$pdf->cell(48,5,'texto prueba diferencia 2',1,1,'C',0);
$pdf->cell(49,5,'texto prueba partida 3',1,0,'C',0);
$pdf->cell(49,5,'texto prueba anterior 3',1,0,'C',0);
$pdf->cell(49,5,'texto prueba actual 3',1,0,'C',0);
$pdf->cell(48,5,'texto prueba diferencia 3',1,1,'C',0);
$pdf->cell(49,5,'texto prueba partida 4',1,0,'C',0);
$pdf->cell(49,5,'texto prueba anterior 4',1,0,'C',0);
$pdf->cell(49,5,'texto prueba actual 4',1,0,'C',0);
$pdf->cell(48,5,'texto prueba diferencia 4',1,1,'C',0);
$pdf->ln(2);
$pdf->cell(195,5,mb_convert_encoding('JUSTIFICACIÓN O MOTIVOS DEL MOVIMIENTO','ISO-8859-1','UTF-8'),1,1,'C',1);
$pdf->cell(195,10,'texto prueba de justificacion',1,1,'L',0);
$pdf->ln(2);
$pdf->cell(65,5,'AUTORIZA',0,0,'C',0);
$pdf->cell(65,5,'AUTORIZA UNIDAD EXPEDIDORA',0,0,'C',0);
$pdf->cell(65,5,mb_convert_encoding('AUTORIZA INGRESO SISTEMA DE NÓMINA','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(65,15,'aqui va firma 1',0,0,'C',0);//espacio para colocar firma
$pdf->cell(65,15,'aqui va firma 2',0,0,'C',0);//espacio para colocar firma
$pdf->cell(65,15,'aqui va firma 3',0,1,'C',0);//espacio para colocar firma
$pdf->cell(65,5,'aqui va nombre 1',0,0,'C',0);//espacio para colocar nombre del empleado
$pdf->cell(65,5,'aqui va nombre 2',0,0,'C',0);//espacio para colcoar nombre de la unidad
$pdf->cell(65,5,'aqui va nombre 3',0,1,'C',0);//espacio para colocar nombre de sistema de nomina
$pdf->cell(65,5,'aqui va puesto 1',0,0,'C',0);//espacio para colocar puesto del empleado
$pdf->cell(65,5,'aqui va puesto 2',0,0,'C',0);//espacio para colocar puesto de la unidad expedidora
$pdf->cell(65,5,'aqui va puesto 3',0,1,'C',0);//espacio para colocar puesto del sistema de nómina
$pdf->cell(65,5,'NOMBRE, CARGO Y FIRMA',0,0,'C',0);
$pdf->cell(65,5,'NOMBRE, CARGO Y FIRMA',0,0,'C',0);
$pdf->cell(65,5,'NOMBRE, CARGO Y FIRMA',0,1,'C',0);
//Lineas que van en el recuadro de firmas
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0,0,0);
$pdf->Line(10,294.5,205,294.5);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,294.5,10,328);
$pdf->SetLineWidth(0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(205,294.5,205,328);
$pdf->SetLineWidth(0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10,328,205,328);
$pdf->SetLineWidth(0);
//lineas que van dentro de el recuadro de firmas y lo divide
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(75,294.5,75,328);
$pdf->SetLineWidth(0);
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0,0,0);
$pdf->Line(140,294.5,140,328);
$pdf->SetLineWidth(0);
//linea izquierda horario asignado
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0,0,0);
$pdf->Line(162,228.5,162,244);
//linea para colocar nombre del puesto
$pdf->SetLineWidth(0.3);
$pdf->SetDrawColor(0,0,0);
$pdf->Line(10,240,123,240);


$pdf->Output('Formato.pdf','I');
?>