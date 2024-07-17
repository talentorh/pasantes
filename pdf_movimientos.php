<?php

require 'fpdf186/fpdf.php';

class PDF extends FPDF{
    function header(){
        $this->image('img/imss_bienestar.png',10,10,40,20);
        $this->SetFont('Arial','',10);
        $this->cell(60);
        $this->cell(80,7,'FORMATO DE MOVIMIENTOS DE PERSONAL',0,1,'C',0);
        $this->cell(40);
        $this->cell(100,7,mb_convert_encoding('PARAMÉDICA AFIN, AFIN, AFIN ADMINISTRATIVA Y CONFI','ISO-8859-1','UTF-8'),0,1,'C',0);
        $this->image('img/logo_hraei.png',165,10,40,20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF("P", "mm", "LETTER");
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->ln(5);
$pdf->SetFont('Arial','',8);
$pdf->cell(33,7,'UNIDAD EXPEDIDORA',0,0,'C',0);
$pdf->cell(12);
$pdf->cell(150,7,'COMISION COORDINADORA DE INSTITUTOS NACIONALES DE SALUD Y HOSPITALES DE ALTA ESPECIALIDAD',0,1,'C',0);
$pdf->ln(3);
$pdf->multicell(30,5,mb_convert_encoding('SUBSECRETARIA DE ADMINISTRACIÓN Y FINANZAS','ISO-8859-1','UTF-8'),0,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->ln(-13);
$pdf->cell(95);
$pdf->cell(50,5,'HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA',0,1,'C',0);
$pdf->SetFont('Arial','',8);
$pdf->ln(11);
$pdf->cell(48,5,mb_convert_encoding('LUGAR Y FECHA DE EXPEDICIÓN','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(12);
$pdf->cell(120,5,'IXTAPALUCA, EDO. DE MEX, A 15 DE DICIEMBRE DE 2024',0,1,'C',0);
$pdf->SetFillColor(7,122,245);
$pdf->ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->cell(195,7,'DATOS PERSONALES',1,1,'C',1);
$pdf->SetFont('Arial','',8);
$pdf->cell(15,5,mb_convert_encoding('SECCIÓN','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(80);
$pdf->cell(8,5,'CURP',0,1,'L',0);
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
$pdf->cell(9);
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
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,0,'C',0);
$pdf->cell(6,5,'',1,1,'C',0);
$pdf->ln(3);
$pdf->cell(50,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(50,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(85,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(50,5,'APELLIDO PATERNO',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(50,5,'APELLIDO MATERNO',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(85,5,'NOMBRE(S)',0,1,'C',0);
$pdf->cell(40,5,'DOMICILIO PARTICULAR',0,1,'C',0);
$pdf->cell(85,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(50,5,'',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(50,5,'',0,1,'C',0);
$pdf->cell(85,5,'CALLE',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(50,5,mb_convert_encoding('NÚMERO EXTERIOR','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(50,5,mb_convert_encoding('NÚMERO INTERIOR','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(42,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,'',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(40,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,'',0,1,'C',0);
$pdf->cell(42,5,'COLONIA',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,mb_convert_encoding('CÓDIGO POSTAL','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(40,5,mb_convert_encoding('DELEGACIÓN O MUNICIPIO','ISO-8859-1','UTF-8'),0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,'ESTADO',0,0,'C',0);
$pdf->cell(5);
$pdf->cell(31,5,mb_convert_encoding('TELÉFONO','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(80,5,'',0,1,'C',0);
$pdf->cell(80,5,mb_convert_encoding('CUENTA BANCARIA NÚMERO','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->ln(3);
$pdf->cell(30,5,mb_convert_encoding('GÉNERO','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(30,5,'ESTADO CIVIL',1,0,'C',1);
$pdf->cell(50,5,'LUGAR DE NACIMIENTO (ESTADO)',1,0,'C',1);
$pdf->cell(35,5,'FECHA DE INGRESO',1,0,'C',1);
$pdf->cell(7,5,mb_convert_encoding('DÍA','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(8,5,'MES',1,0,'C',1);
$pdf->cell(9,5,mb_convert_encoding('AÑO','ISO-8859-1','UTF-8'),1,0,'C',1);
$pdf->cell(28,5,'CODEPENDENCIA',1,1,'C',1);
$pdf->cell(30,15,'',1,0,'C',0);
$pdf->cell(30,15,'',1,0,'C',0);
$pdf->cell(50,15,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,0,'C',0);
$pdf->multicell(35,5,'',1,'C',0);
$pdf->ln(-5);
$pdf->cell(145);
$pdf->cell(7,15,'',1,0,'C',0);
$pdf->cell(8,15,'',1,0,'C',0);
$pdf->cell(9,15,'',1,0,'C',0);
$pdf->cell(28,15,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->ln(3);
$pdf->cell(195,7,'DATOS PRESUPUESTALES',1,1,'C',1);
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
$pdf->cell(10,5,'',1,0,'C',0);
$pdf->cell(13,5,'',1,0,'C',0);
$pdf->cell(15,5,'',1,0,'C',0);
$pdf->cell(15,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,0,'C',0);
$pdf->cell(10,5,'',1,0,'C',0);
$pdf->cell(10,5,'',1,0,'C',0);
$pdf->cell(10,5,'',1,0,'C',0);
$pdf->cell(21,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,0,'C',0);
$pdf->cell(21,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,0,'C',0);
$pdf->cell(30,5,'',1,1,'C',0);
$pdf->cell(30,5,mb_convert_encoding('ADSCRIPCIÓN','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(30,5,'CLAVE ANTERIOR',0,1,'C',0);
$pdf->cell(65,5,'CLAVE DEL CENTRO DE RESPONSABILIDAD',0,0,'C',0);
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






$pdf->Output('Formato.pdf','I');

?>