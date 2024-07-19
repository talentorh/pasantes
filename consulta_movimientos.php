<?php

require 'clases/conexion.php';
$conexion = new Conexion();
$id_empleado = 1983;

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
$conexion->beginTransaction();

$sql = $conexion->prepare("SELECT * FROM   WHERE id_empleado = :id_empleado");//le puse el nombre de esta tabla pero le vo a corregir el nombre para que los datos se puedan extraer correctamente y poder mostrar los datos de la tabla adecuada en el pdf
$sql->execute(
    array(
        ':id_empleado' => $id_empleado
    )
);

$movimientos = $sql->fetch();
$conexion->commit();
$idempleado = $movimientos['id_empleado'];
if ($id_empleado == $idempleado){
    require 'pdf_movimientos.php';
}

?>