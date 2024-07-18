<?php
//error_reporting(0);

require 'fpdf186/fpdf.php';

class PDF extends FPDF{
    function header(){
        $this->cell(90,7,'',0,1,'C'); //<-titulo pendiente
        $this->Image('img/hraei.png',170,5,100,20);
        $this->Ln(10); 
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF("L", "mm", "LETTER");
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetLineWidth(0.5);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 24, 171, 24);
$pdf->SetLineWidth(0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(258,5,'DATOS DEL EVALUADO',1,1,'C',0);
$pdf->Ln(1);
$pdf->cell(30,5,'No. de Empleado',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(228,5,mb_convert_encoding('1983','ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,5,'Nombre',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(228,5,mb_convert_encoding('ALBERTO VAZQUEZ ARIAS','ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,5,'Puesto',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(228,5,mb_convert_encoding('SOPORTE ADMINSTRATIVO B','ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->ln(5);
$pdf->cell(258,5,'DATOS DEL EVALUADOR',1,1,'C',0);
$pdf->Ln(1);
$pdf->cell(30,5,'No. de Empleado',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(228,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,5,'Nombre',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(228,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,5,'Puesto',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(228,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->ln(5);
$pdf->Setfillcolor(3,19,100);
$pdf->cell(258,7,mb_convert_encoding('METAS ESTRATEGICAS','ISO-8859-1','UTF-8'),0,1,'C',1);
//contador para que ponga el numero de la meta depende de cuantas son

//consulta y validacion para que si existen metas las coloque

//codigo de metas
$pdf->ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',8);
//número de meta

$pdf->cell(20,5,mb_convert_encoding('Eje estratégico','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(194);
$pdf->cell(20,5,mb_convert_encoding('Fecha de cumplimiento','ISO-8859-1','UTF-8'),0,1,'L',0,);

$pdf->multicell(210,5,mb_convert_encoding('Modelo de Desarrollo Organizacional integral.','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->ln(-5);
$pdf->cell(215);
$pdf->cell(30,5,'',1,1,'C',0);

$pdf->cell(40,5,mb_convert_encoding('Línea Estratégica alineada a','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(175);
$pdf->cell(20,5,'Unidad de medida',0,1,'L',0);

$pdf->multicell(210,5,mb_convert_encoding('Impulsar el cambio tecnológico e innovación','ISO-8859-1','UTF-8'),1,'C',0);

$pdf->ln(-5);
$pdf->cell(215);
$pdf->cell(30,5,'',1,1,'C',0);

$pdf->cell(10,5,'Meta',0,0,'L',0);
$pdf->cell(205);
$pdf->cell(20,5,mb_convert_encoding('Ponderación','ISO-8859-1','UTF-8'),0,1,'L',0);//titulo tercer campo

$pdf->multicell(210,5,mb_convert_encoding('Investigar una herramientas de inteligencia artificial que pueda ser aplicada en el sistema de evaluación del desempeño, esto con el objetivo de que el personal pueda redactar sus metas de una manera mas eficiente, solicitando a la IA(Inteligencia Artificial) Asesoría sobre algún tema en especifico.','ISO-8859-1','UTF-8'),1,'C',0);

$pdf->ln(-5);
$pdf->cell(215);
$pdf->cell(30,5,'',1,1,'C',0);

$pdf->cell(40,5,'Indicador',0,1,'L',0);

$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->Ln(5);
$pdf->cell(258,5,'Niveles de cumplimiento',1,1,'C',0);
$pdf->Ln(2);
$pdf->cell(30,5,'Deficiente',0,0,'L',0);
$pdf->cell(18);
$pdf->cell(30,5,'No aprobatorio',0,0,'L',0);
$pdf->cell(20);
$pdf->cell(30,5,'No satisfactorio',0,0,'L',0);
$pdf->cell(20);
$pdf->cell(30,5,'Satisfactorio',0,0,'L',0);
$pdf->cell(21);
$pdf->cell(30,5,'Sobresaliente',0,1,'L',0);

$pdf->multicell(45,5,mb_convert_encoding('Investigar una herramientas de inteligencia artificial que pueda ser aplicada en el sistema de','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(48);
$pdf->multicell(45,5,mb_convert_encoding('Investigar una herramientas de inteligencia artificial que pueda ser aplicada en el sistema de','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(99);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(149);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(200);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
//después de haber validado y colocado el número de metas se coloca el valor de grado de cumplimiento

//termina contenido de metas que será dinámico

//INICIAN LAS METAS COLECTIVAS Y ES FIJA ES 1
$pdf->AddPage();
$pdf->SetLineWidth(0.5);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 24, 268, 24);
$pdf->SetLineWidth(0);
$pdf->SetFillColor(3,19,100);
$pdf->SetTextColor(255, 255, 255);
$pdf->cell(258,7,'Metas colectivas',0,1,'C',1);
$pdf->ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',8);
$pdf->cell(10,5,'',0,0,'C',0);//número de meta

$pdf->cell(20,5,mb_convert_encoding('Eje estratégico','ISO-8859-1','UTF-8'),0,0,'L',0);
$x_cell16 = $pdf->getX();
$y_cell16 = $pdf->getY();
$pdf->setXY($x_cell16 + 197, $y_cell16 + 0);//parte del titulo eje
$pdf->cell(42,5,'Fecha de cumplimiento de meta',0,1,'L',0);
$x_cell17 = $pdf->getX();
$y_cell17 = $pdf->getY();
//alinea el contenido del eje con el contenido de la fecha
$pdf->setXY($x_cell16 - 20, $y_cell16 + 5);//parte del titulo eje
$pdf->multicell(213,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);//->coloca eje
$x_multicell18 = $pdf->getX();
$y_multicell18 = $pdf->getY();
$pdf->setXY($x_cell17 + 218, $y_cell17 + 0);//parte del titulo de fecha
$pdf->cell(40,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'C',0);
$x_cell19 = $pdf->getX();
$y_cell19 = $pdf->getY();
//alinea titulo linea con titulo unidad 
$pdf->setXY($x_multicell18 + 0, $y_multicell18 + 0);//parte del contenido de ejes
$pdf->cell(36,5,mb_convert_encoding('Línea estratégica alineada a','ISO-8859-1','UTF-8'),0,0,'C',0);
$x_cell20 = $pdf->getX();
$y_cell20 = $pdf->getY();
$pdf->setXY($x_cell20 + 182, $y_cell20 + 0);//parte del titulo de linea
$pdf->cell(24,5,mb_convert_encoding('Unidad de medida','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_cell21 = $pdf->getX();
$y_cell21 = $pdf->getY();
//alinea contenido de linea con contenido de unidad de medida
$pdf->setXY($x_cell20 - 36, $y_cell20 + 5);//parte del titulo linea
$pdf->multicell(213,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$x_multicell22 = $pdf->getX();
$y_multicell22 = $pdf->getY();
$pdf->setXY($x_cell21 + 218, $y_cell21 + 0);//parte del titulo de unidad
$pdf->cell(40,5,'',1,1,'C',0);
$x_cell23 = $pdf->getX();
$y_cell23 = $pdf->getY();
//alinea titulo de meta con titulo de ponderacion
$pdf->setXY($x_multicell22 + 0, $y_multicell22 + 0);//parte del contenido de linea
$pdf->cell(8,5,mb_convert_encoding('Meta','ISO-8859-1','UTF-8'),0,0,'L',0);
$x_cell24 = $pdf->getX();
$y_cell24 = $pdf->getY();
$pdf->setXY($x_cell24 + 210, $y_cell24 + 0);//parte del titulo de meta
$pdf->cell(18,5,mb_convert_encoding('Ponderación','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_cell25 = $pdf->getX();
$y_cell25 = $pdf->getY();
//alinea contenido de meta con contenido de ponderacion
$pdf->setXY($x_cell24 - 8, $y_cell24 + 5);//parte del titulo de meta
$pdf->multicell(213,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$x_multicell26 = $pdf->getX();
$y_multicell26 = $pdf->getY();
$pdf->setXY($x_cell25 + 218, $y_cell25 + 0);//parte del titulo de ponderación
$pdf->cell(40,5,'',1,1,'C',0);
$x_cell27 = $pdf->getX();
$y_cell27 = $pdf->getY();
//alinear titulo de indicador con contenido de indicador
$pdf->setXY($x_multicell26 + 0, $y_multicell26 + 0);//partir del contenido de meta
$pdf->cell(13,5,mb_convert_encoding('Indicador','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_cell28 = $pdf->getX();
$y_cell28 = $pdf->getY();
$pdf->setXY($x_cell28 + 0, $y_cell28 + 0);//partir del titulo de indicador
$pdf->multicell(213,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$x_multicell29 = $pdf->getX();
$y_multicell29 = $pdf->getY();
//niveles de cumplimiento
$pdf->ln(3);
$pdf->cell(258,5,'Niveles de cumplimiento',1,1,'C',0);
$pdf->ln(3);
$pdf->cell(48,5,'Nivel de cumplimiento deficiente',0,0,'L',0);
$pdf->cell(4);
$pdf->cell(48,5,'Nivel de cumplimiento no aprobatorio',0,0,'L',0);
$pdf->cell(5);
$pdf->cell(48,5,'Nivel de cumplimiento aprobatorio',0,0,'L',0);
$pdf->cell(5);
$pdf->cell(48,5,'Nivel de cumplimiento satisfecho',0,0,'L',0);
$pdf->cell(4);
$pdf->cell(48,5,'Nivel de cumplimiento sobresaliente',0,1,'L',0);
//multicell11
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell11 = $pdf->getX();
$y_multicell11 = $pdf->getY();
//multicell12
$pdf->setXY($x_multicell11 + 53, $y_multicell11 - 5);//parte de la multicell11
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell12 = $pdf->getX();
$y_multicell12 = $pdf->getY();
//multicell13
$pdf->setXY($x_multicell12 + 106, $y_multicell12 - 5);//parte de la multicell12
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell13 = $pdf->getX();
$y_multicell13 = $pdf->getY();
//multicell14
$pdf->setXY($x_multicell13 + 159, $y_multicell13 - 5);//parte de la multicell13
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell14 = $pdf->getX();
$y_multicell14 = $pdf->getY();
//multicell15
$pdf->setXY($x_multicell14 + 211, $y_multicell14 - 5);//parte de la multicell14
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell15 = $pdf->getX();
$y_multicell15 = $pdf->getY();
$pdf->SetFont('Arial','B',8);
$pdf->ln(3);
//dibujar la linea
$pdf->SetLineWidth(0.5);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(268, $y_multicell11 + 3, $x_multicell11, $y_multicell11 + 3);
$pdf->SetLineWidth(0);
$pdf->ln(3);
$pdf->cell(84,5,'VALOR DE GRADO DE CUMPLIMIENTO DE LOS OBJETIVOS',0,0,'C',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(15,5,'',1,1,'C',0);

//comentarios finales sobre las metas
$pdf->AddPage();
$pdf->cell(85);
$pdf->SetFont('Arial','B','8');
$pdf->cell(88,5,'COMENTARIO DEL JEFE DURANTE EL PROCESO DE CAPTURA',0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding($metas['comentariojefe'],'ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(85);
$pdf->SetFont('Arial','B','8');
$pdf->cell(88,5,'COMENTARIO DEL JEFE EN EL PROCESO DE SEGUIMIENTO',0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding($metas['comentarioJefeResultado2022'],'ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(85);
$pdf->SetFont('Arial','B','8');
$pdf->cell(90,5,mb_convert_encoding('COMENTARIO DEL JEFE EN EL PROCESO DE EVALUACIÓN FINAL','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding($metas['comentarioResultado2022'],'ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(82);
$pdf->SetFont('Arial','B','8');
$pdf->cell(95,5,mb_convert_encoding('COMENTARIO DEL COLABORADOR EN EL PROCESO DE EVALUACIÓN FINAL','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding($metas['comentario'],'ISO-8859-1','UTF-8'),1,'C',0);
$pdf->Output('I','formato.pdf');
?>