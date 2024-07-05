<?php
require 'clases/conexion.php';
$conexion = new Conexion();
$id = 65;
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
$conexion->beginTransaction();

$sql = $conexion->prepare("SELECT * FROM induccion WHERE id_empleado = :id_empleado");
$sql->execute(
    array(
    ':id_empleado'=>$id
    )
);
$registros = $sql->fetch();
$conexion->commit();
$idempleado = $registros['id_empleado'];
if ($id == $idempleado ){
    require 'pdf_induccion.php';
}

?>


