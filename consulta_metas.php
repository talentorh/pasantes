<?php
//error_reporting(0);
require 'clases/conexion.php';

try {
    $conexion = new Conexion();
    $id = 6;

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
    $conexion->beginTransaction();

    $sql = $conexion->prepare("SELECT * FROM descripcionesmetas2023 WHERE id_empleado = :id_empleado");
    $sql->execute([':id_empleado' => $id]);
    $metas = $sql->fetch();

    if ($metas) {
        $conexion->commit();
        $idempleado = $metas['id_empleado'];

        if ($id == $idempleado) {
            require 'pdf_cedula_metas.php';
        }
    } else {
        $conexion->rollBack();
        echo "No se encontraron datos para el empleado con ID: $id";
    }
} catch (PDOException $e) {
    $conexion->rollBack();
    echo "Error: " . $e->getMessage();
}
?>



