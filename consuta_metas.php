<?php
error_reporting(0);
require 'clases/conexion.php';
$conexion = new Conexion();
$id = 6;
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
$conexion->beginTransaction();

$sql->$conexion->prepare("SELECT * FROM descripcionesmetas2023 WHERE id_empleado = :id_empleado");
$sql->execute(
    array(
        ':id_empleado'=>$id
    )
);
$datos = $sql->fetch();
$conexion->commit();
$idempleado = $datos['id_empleado'];
if($id == $idempleado){
    require 'pdf_cedula_metas.php';
}
?>


