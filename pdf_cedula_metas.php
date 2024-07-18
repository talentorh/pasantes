<?php
error_reporting(0);

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
        $this->cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF("L", "mm", "LETTER");
$pdf->AliasNbPages();
$pdf->AddPage();
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

//inicia meta funcional y estas son fijas y es 1
$pdf->AddPage();
$pdf->Setfillcolor(3,19,100);
$pdf->cell(258,7,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,1,'C',1);
$pdf->ln(5);
$pdf->SetFont('Arial','',8);
$pdf->cell(10,5,'',0,0,'C',0);//número de meta

$pdf->cell(20,5,mb_convert_encoding('Eje estratégico','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(194);
$pdf->cell(20,5,mb_convert_encoding('Ponderación','ISO-8859-1','UTF-8'),0,1,'L',0,);
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->ln(-5);
$pdf->cell(228);
$pdf->cell(30,5,'',1,1,'C',0); //contenido ponderación
$pdf->cell(13);
$pdf->cell(40,5,mb_convert_encoding('Línea Estratégica alineada a','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(13);
$pdf->cell(10,5,'Meta',0,0,'L',0);
$pdf->cell(204);
$pdf->cell(20,5,'Avance',0,1,'L',0);
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->ln(-5);
$pdf->cell(228);
$pdf->cell(30,5,'',1,1,'C',0); //contenido avance
$pdf->cell(13);
$pdf->cell(40,5,'Indicador',0,1,'L',0);
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(13);
$pdf->cell(40,5,'Resultado obtenido',0,0,'L',0);
$pdf->cell(175);
$pdf->cell(20,5,'',0,1,'C',0);//titulo tercer campo
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->ln(-5);
$pdf->cell(228);
$pdf->cell(30,5,'',1,1,'C',0); //contenido tercer campo
$pdf->ln(3);
$pdf->cell(13);
$pdf->cell(30,5,'Campo 1',0,0,'L',0);
$pdf->cell(17);
$pdf->cell(30,5,'Campo 2',0,0,'L',0);
$pdf->cell(20);
$pdf->cell(30,5,'Campo 3',0,0,'L',0);
$pdf->cell(20);
$pdf->cell(30,5,'Campo 4',0,0,'L',0);
$pdf->cell(21);
$pdf->cell(30,5,'Campo 5',0,1,'L',0);
$pdf->cell(13);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(62);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(112);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(162);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(213);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(3);
$pdf->cell(2);
$pdf->SetFont('Arial','B','8');
$pdf->cell(256,5,'--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C',0);
$pdf->ln(3);
$pdf->cell(13);
$pdf->cell(83,5,'VALOR DEL GRADO DE CUMPLIMIENTO DE LOS OBJETIVOS',0,0,'C',0);
$pdf->cell(50);
$pdf->SetFont('Arial','','8');
$pdf->cell(15,5,'',1,1,'C',0);
//inicia metas colectivas
$pdf->AddPage();
$pdf->Setfillcolor(3,19,100);
$pdf->cell(258,7,mb_convert_encoding('','ISO-8859-1','UTF-8'),0,1,'C',1);
$pdf->ln(5);
$pdf->SetFont('Arial','',8);
$pdf->cell(10,5,'',0,0,'C',0);//número de meta
$pdf->cell(3);
$pdf->cell(20,5,mb_convert_encoding('Eje estratégico','ISO-8859-1','UTF-8'),0,0,'L',0);
$pdf->cell(194);
$pdf->cell(20,5,mb_convert_encoding('Ponderación','ISO-8859-1','UTF-8'),0,1,'L',0,);
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->ln(-5);
$pdf->cell(228);
$pdf->cell(30,5,'',1,1,'C',0); //contenido ponderación
$pdf->cell(13);
$pdf->cell(40,5,mb_convert_encoding('Línea Estratégica alineada a','ISO-8859-1','UTF-8'),0,1,'L',0);
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(13);
$pdf->cell(10,5,'Meta',0,0,'L',0);
$pdf->cell(204);
$pdf->cell(20,5,'Avance',0,1,'L',0);
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->ln(-5);
$pdf->cell(228);
$pdf->cell(30,5,'',1,1,'C',0); //contenido avance
$pdf->cell(13);
$pdf->cell(40,5,'Indicador',0,1,'L',0);
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(13);
$pdf->cell(40,5,'Resultado obtenido',0,0,'L',0);
$pdf->cell(175);
$pdf->cell(20,5,'',0,1,'C',0);//titulo tercer campo
$pdf->cell(13);
$pdf->multicell(210,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->ln(-5);
$pdf->cell(228);
$pdf->cell(30,5,'',1,1,'C',0); //contenido tercer campo
$pdf->ln(3);
$pdf->cell(13);
$pdf->cell(30,5,'Campo 1',0,0,'L',0);
$pdf->cell(17);
$pdf->cell(30,5,'Campo 2',0,0,'L',0);
$pdf->cell(20);
$pdf->cell(30,5,'Campo 3',0,0,'L',0);
$pdf->cell(20);
$pdf->cell(30,5,'Campo 4',0,0,'L',0);
$pdf->cell(21);
$pdf->cell(30,5,'Campo 5',0,1,'L',0);
$pdf->cell(13);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(62);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(112);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(162);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(-5);
$pdf->cell(213);
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$pdf->ln(3);
$pdf->cell(2);
$pdf->SetFont('Arial','B','8');
$pdf->cell(256,5,'--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C',0);
$pdf->ln(3);
$pdf->cell(13);
$pdf->cell(83,5,'VALOR DEL GRADO DE CUMPLIMIENTO DE LOS OBJETIVOS',0,0,'C',0);
$pdf->cell(50);
$pdf->SetFont('Arial','','8');
$pdf->cell(15,5,'',1,1,'C',0);
$pdf->AddPage();
$pdf->cell(85);
$pdf->SetFont('Arial','B','8');
$pdf->cell(88,5,'COMENTARIO DEL JEFE DURANTE EL PROCESO DE CAPTURA',0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding(''),1,'C',0);
$pdf->cell(85);
$pdf->SetFont('Arial','B','8');
$pdf->cell(88,5,'COMENTARIO DEL JEFE EN EL PROCESO DE SEGUIMIENTO',0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding(''),1,'C',0);
$pdf->cell(85);
$pdf->SetFont('Arial','B','8');
$pdf->cell(90,5,mb_convert_encoding('COMENTARIO DEL JEFE EN EL PROCESO DE EVALUACIÓN FINAL','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding(''),1,'C',0);
$pdf->cell(82);
$pdf->SetFont('Arial','B','8');
$pdf->cell(95,5,mb_convert_encoding('COMENTARIO DEL COLABORADOR EN EL PROCESO DE EVALUACIÓN FINAL','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding(''),1,'C',0);



$pdf->Output('Formato.pdf',I);
?>