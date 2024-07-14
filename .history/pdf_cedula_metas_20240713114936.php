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
        $this->cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF("L", "mm", "LETTER");
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
$pdf->cell(258,5,'DATOS DEL EVALUADOR',0,1,'L',0);
$pdf->cell(30,5,'No. NOMINA',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(100,5,'',1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,5,'NOMBRE',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(100,5,'',1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,5,'PUESTO',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(100,5,'',1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->ln(5);
$pdf->cell(258,5,'DATOS DEL EVALUADOR',0,1,'L',0);
$pdf->cell(30,5,'No. NOMINA',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(100,5,'',1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,5,'NOMBRE',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(100,5,mb_convert_encoding($datos['nombrejefeevaluo'],'ISO-8859-1','UTF-8'),1,1,'C',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(30,5,'PUESTO',0,0,'L',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(100,5,'',1,1,'C',0);
$pdf->ln(5);
//condicional para generar metas con base a la cantidad de metas que tiene cada empleado y que est+an identificados por un id de empleado
/* 
$conexion = new Conexion();
$id = 1108;
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
$conexion->beginTransaction();

$sql = $conexion->prepare("SELECT * FROM descripcionesmetas2023 WHERE id_empleado = $id");
$resultado = $conexion->consulta($sql);

$metas = [];
if ($resultado->num_rows > 0) {
    
    }
} else {
    echo "No se encontraron metas para el empleado con ID $id_empleado";
    exit;
}

$conexxion->close();
*/
//EMPIEZAN METAS INDIVIDUALES
$pdf->SetFillColor(3,19,100);
$pdf->SetTextColor(255, 255, 255);
$pdf->cell(258,7,'Metas individuales',0,1,'C',1);
$pdf->ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',8);
//alinea titulo de eje con titulo de fecha
$pdf->cell(20,5,mb_convert_encoding('Eje estratégico','ISO-8859-1','UTF-8'),0,0,'L',0);
$x_cella = $pdf->getX();
$y_cella = $pdf->getY();
$pdf->setXY($x_cella + 197, $y_cella + 0);//parte del titulo eje
$pdf->cell(42,5,'Fecha de cumplimiento de meta',0,1,'L',0);
$x_cellb = $pdf->getX();
$y_cellb = $pdf->getY();
//alinea el contenido del eje con el contenido de la fecha
$pdf->setXY($x_cella - 20, $y_cella + 5);//parte del titulo eje
$pdf->multicell(213,5,mb_convert_encoding($datos['ejeestrategico1'],'ISO-8859-1','UTF-8'),1,'C',0);//->coloca eje
$x_multicellc = $pdf->getX();
$y_multicellc = $pdf->getY();
$pdf->setXY($x_cellb + 218, $y_cellb + 0);//parte del titulo de fecha
$pdf->cell(40,5,mb_convert_encoding($datos['fechaCumpMeta1'],'ISO-8859-1','UTF-8'),1,1,'C',0);
$x_celld = $pdf->getX();
$y_celld = $pdf->getY();
//alinea titulo linea con titulo unidad 
$pdf->setXY($x_multicellc + 0, $y_multicellc + 0);//parte del contenido de ejes
$pdf->cell(36,5,mb_convert_encoding('Línea estratégica alineada a','ISO-8859-1','UTF-8'),0,0,'C',0);
$x_celle = $pdf->getX();
$y_celle = $pdf->getY();
$pdf->setXY($x_celle + 182, $y_celle + 0);//parte del titulo de linea
$pdf->cell(24,5,mb_convert_encoding('Unidad de medida','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_cellf = $pdf->getX();
$y_cellf = $pdf->getY();
//alinea contenido de linea con contenido de unidad de medida
$pdf->setXY($x_celle - 36, $y_celle + 5);//parte del titulo linea
$pdf->multicell(213,5,mb_convert_encoding($datos['lineaestrategica1'],'ISO-8859-1','UTF-8'),1,'C',0);
$x_multicellg = $pdf->getX();
$y_multicellg = $pdf->getY();
$pdf->setXY($x_cellf + 218, $y_cellf + 0);//parte del titulo de unidad
$pdf->cell(40,5,$datos['unidadmedida1'],1,1,'C',0);
$x_cellh = $pdf->getX();
$y_cellh = $pdf->getY();
//alinea titulo de meta con titulo de ponderacion
$pdf->setXY($x_multicellg + 0, $y_multicellg + 0);//parte del contenido de linea
$pdf->cell(8,5,mb_convert_encoding('Meta','ISO-8859-1','UTF-8'),0,0,'L',0);
$x_celli = $pdf->getX();
$y_celli = $pdf->getY();
$pdf->setXY($x_celli + 210, $y_celli + 0);//parte del titulo de meta
$pdf->cell(18,5,mb_convert_encoding('Ponderación','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_cellj = $pdf->getX();
$y_cellj = $pdf->getY();
//alinea contenido de meta con contenido de ponderacion
$pdf->setXY($x_celli - 8, $y_celli + 5);//parte del titulo de meta
$pdf->multicell(213,5,mb_convert_encoding($datos['redacionMeta1'],'ISO-8859-1','UTF-8'),1,'C',0);
$x_multicellk = $pdf->getX();
$y_multicellk = $pdf->getY();
$pdf->setXY($x_cellj + 218, $y_cellj + 0);//parte del titulo de ponderación
$pdf->cell(40,5,$datos['ponderacionMeta1'],1,1,'C',0);
$x_cellm = $pdf->getX();
$y_cellm = $pdf->getY();
//alinear titulo de indicador con contenido de indicador
$pdf->setXY($x_multicellk + 0, $y_multicellk + 0);//partir del contenido de meta
$pdf->cell(13,5,mb_convert_encoding('Indicador','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_celln = $pdf->getX();
$y_celln = $pdf->getY();
$pdf->setXY($x_celln + 0, $y_celln + 0);//partir del titulo de indicador
$pdf->multicell(213,5,mb_convert_encoding($datos['indicadorMeta1'],'ISO-8859-1','UTF-8'),1,'C',0);
$x_multicello = $pdf->getX();
$y_multicello = $pdf->getY();
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
//multicell1
$pdf->multicell(45,5,mb_convert_encoding($datos['deficiente1'],'ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell1 = $pdf->getX();
$y_multicell1 = $pdf->getY();
//multicell2
$pdf->setXY($x_multicell1 + 53, $y_multicell1 - 5);//parte de la multicell1
$pdf->multicell(45,5,mb_convert_encoding($datos['NivelCumpNoAproMeta1'],'ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell2 = $pdf->getX();
$y_multicell2 = $pdf->getY();
//multicell3
$pdf->setXY($x_multicell2 + 106, $y_multicell2 - 5);//parte de la multicell2
$pdf->multicell(45,5,mb_convert_encoding($datos['NivelCumpAproMeta1'],'ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell3 = $pdf->getX();
$y_multicell3 = $pdf->getY();
//multicell4
$pdf->setXY($x_multicell3 + 159, $y_multicell3 - 5);//parte de la multicell3
$pdf->multicell(45,5,mb_convert_encoding($datos['NivelCumpSatisfMeta1'],'ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell4 = $pdf->getX();
$y_multicell4 = $pdf->getY();
//multicell5
$pdf->setXY($x_multicell4 + 211, $y_multicell4 - 5);//parte de la multicell4
$pdf->multicell(45,5,mb_convert_encoding($datos['NivelCumpSobreMeta1'],'ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell5 = $pdf->getX();
$y_multicell5 = $pdf->getY();
$pdf->SetFont('Arial','B',8);
$pdf->ln(3);
$pdf->cell(258,5,'-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C',0);
$pdf->ln(3);
$pdf->cell(84,5,'VALOR DE GRADO DE CUMPLIMIENTO DE LOS OBJETIVOS',0,0,'C',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(15,5,$datos['nivelescumplimiento1'],1,1,'C',0);

//EMPIEZAN LAS METAS FUNCIONALES ES FIJA Y ES 1
$pdf->AddPage();
$pdf->SetFillColor(3,19,100);
$pdf->SetTextColor(255, 255, 255);
$pdf->cell(258,7,'Metas funcionales',0,1,'C',1);
$pdf->ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',8);
//alinea titulo de eje con titulo de fecha
$pdf->cell(20,5,mb_convert_encoding('Eje estratégico','ISO-8859-1','UTF-8'),0,0,'L',0);
$x_cellaa = $pdf->getX();
$y_cellaa = $pdf->getY();
$pdf->setXY($x_cellaa + 197, $y_cellaa + 0);//parte del titulo eje
$pdf->cell(42,5,'Fecha de cumplimiento de meta',0,1,'L',0);
$x_cellbb = $pdf->getX();
$y_cellbb = $pdf->getY();
//alinea el contenido del eje con el contenido de la fecha
$pdf->setXY($x_cellaa - 20, $y_cellaa + 5);//parte del titulo eje
$pdf->multicell(213,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);//->coloca eje
$x_multicellcc = $pdf->getX();
$y_multicellcc = $pdf->getY();
$pdf->setXY($x_cellbb + 218, $y_cellbb + 0);//parte del titulo de fecha
$pdf->cell(40,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,1,'C',0);
$x_celldd = $pdf->getX();
$y_celldd = $pdf->getY();
//alinea titulo linea con titulo unidad 
$pdf->setXY($x_multicellcc + 0, $y_multicellcc + 0);//parte del contenido de ejes
$pdf->cell(36,5,mb_convert_encoding('Línea estratégica alineada a','ISO-8859-1','UTF-8'),0,0,'C',0);
$x_cellee = $pdf->getX();
$y_cellee = $pdf->getY();
$pdf->setXY($x_cellee + 182, $y_cellee + 0);//parte del titulo de linea
$pdf->cell(24,5,mb_convert_encoding('Unidad de medida','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_cellff = $pdf->getX();
$y_cellff = $pdf->getY();
//alinea contenido de linea con contenido de unidad de medida
$pdf->setXY($x_cellee - 36, $y_cellee + 5);//parte del titulo linea
$pdf->multicell(213,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$x_multicellgg = $pdf->getX();
$y_multicellgg = $pdf->getY();
$pdf->setXY($x_cellff + 218, $y_cellff + 0);//parte del titulo de unidad
$pdf->cell(40,5,'',1,1,'C',0);
$x_cellhh = $pdf->getX();
$y_cellhh = $pdf->getY();
//alinea titulo de meta con titulo de ponderacion
$pdf->setXY($x_multicellgg + 0, $y_multicellgg + 0);//parte del contenido de linea
$pdf->cell(8,5,mb_convert_encoding('Meta','ISO-8859-1','UTF-8'),0,0,'L',0);
$x_cellii = $pdf->getX();
$y_cellii = $pdf->getY();
$pdf->setXY($x_cellii + 210, $y_cellii + 0);//parte del titulo de meta
$pdf->cell(18,5,mb_convert_encoding('Ponderación','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_celljj = $pdf->getX();
$y_celljj = $pdf->getY();
//alinea contenido de meta con contenido de ponderacion
$pdf->setXY($x_cellii - 8, $y_cellii + 5);//parte del titulo de meta
$pdf->multicell(213,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$x_multicellkk = $pdf->getX();
$y_multicellkk = $pdf->getY();
$pdf->setXY($x_celljj + 218, $y_celljj + 0);//parte del titulo de ponderación
$pdf->cell(40,5,'',1,1,'C',0);
$x_cellmm = $pdf->getX();
$y_cellmm = $pdf->getY();
//alinear titulo de indicador con contenido de indicador
$pdf->setXY($x_multicellkk + 0, $y_multicellkk + 0);//partir del contenido de meta
$pdf->cell(13,5,mb_convert_encoding('Indicador','ISO-8859-1','UTF-8'),0,1,'L',0);
$x_cellnn = $pdf->getX();
$y_cellnn = $pdf->getY();
$pdf->setXY($x_cellnn + 0, $y_cellnn + 0);//partir del titulo de indicador
$pdf->multicell(213,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$x_multicelloo = $pdf->getX();
$y_multicelloo = $pdf->getY();
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
//multicell6
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell6 = $pdf->getX();
$y_multicell6 = $pdf->getY();
//multicell7
$pdf->setXY($x_multicell6 + 53, $y_multicell6 - 5);//parte de la multicell6
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell7 = $pdf->getX();
$y_multicell7 = $pdf->getY();
//multicell8
$pdf->setXY($x_multicell7 + 106, $y_multicell7 - 5);//parte de la multicell7
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell8 = $pdf->getX();
$y_multicell8 = $pdf->getY();
//multicell9
$pdf->setXY($x_multicell8 + 159, $y_multicell8 - 5);//parte de la multicell8
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell9 = $pdf->getX();
$y_multicell9 = $pdf->getY();
//multicell10
$pdf->setXY($x_multicell9 + 211, $y_multicell9 - 5);//parte de la multicell9
$pdf->multicell(45,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'L',0);
$x_multicell10 = $pdf->getX();
$y_multicell10 = $pdf->getY();
$pdf->SetFont('Arial','B',8);
$pdf->ln(3);
$pdf->cell(258,5,'-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C',0);
$pdf->ln(3);
$pdf->cell(84,5,'VALOR DE GRADO DE CUMPLIMIENTO DE LOS OBJETIVOS',0,0,'C',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(15,5,'',1,1,'C',0);

//INICIAN LAS METAS COLECTIVAS Y ES FIJA ES 1
$pdf->AddPage();
$pdf->SetFillColor(3,19,100);
$pdf->SetTextColor(255, 255, 255);
$pdf->cell(258,7,'Metas colectivas',0,1,'C',1);
$pdf->ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',8);
//alinea titulo de eje con titulo de fecha
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
$pdf->cell(258,5,'-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C',0);
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
$pdf->multicell(107,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(85);
$pdf->SetFont('Arial','B','8');
$pdf->cell(88,5,'COMENTARIO DEL JEFE EN EL PROCESO DE SEGUIMIENTO',0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(85);
$pdf->SetFont('Arial','B','8');
$pdf->cell(90,5,mb_convert_encoding('COMENTARIO DEL JEFE EN EL PROCESO DE EVALUACIÓN FINAL','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->cell(82);
$pdf->SetFont('Arial','B','8');
$pdf->cell(95,5,mb_convert_encoding('COMENTARIO DEL COLABORADOR EN EL PROCESO DE EVALUACIÓN FINAL','ISO-8859-1','UTF-8'),0,1,'C',0);
$pdf->cell(76);
$pdf->SetFont('Arial','','8');
$pdf->multicell(107,5,mb_convert_encoding('','ISO-8859-1','UTF-8'),1,'C',0);
$pdf->Output('I','formato.pdf');
?>