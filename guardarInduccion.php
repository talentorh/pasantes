<?php 
error_reporting(0);
require 'clases/conexion.php';
$conexion = new Conexion();

extract($_POST);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
$conexion->beginTransaction();

$sql = $conexion->prepare("INSERT INTO induccion (ingreso, dar_bienvenida, explique_organizacion, realice_recorrido, presente_trabajador, describa_brevemente, presente_grupo, propicie_ambiente, comente_condiciones, explique_mision, señale_vision, muestra_ubicacion, explique_formatos, capacite_utilizacion, explique_instrucciones, motive_trabajador, id_empleado) 
VALUES (:ingreso, :dar_bienvenida, :explique_organizacion, :realice_recorrido, :presente_trabajador, :describa_brevemente, :presente_grupo, :propicie_ambiente, :comente_condiciones, :explique_mision, :señale_vision, :muestra_ubicacion, :explique_formatos, :capacite_utilizacion, :explique_instrucciones, :motive_trabajador, :id_empleado)");
$sql->execute(array(
    ':ingreso'=>$tipodeingreso,
    ':dar_bienvenida'=>$darbienvenida,
    ':explique_organizacion'=>$expliqueorganizacion,
    ':realice_recorrido'=>$realicerecorrido,
    ':presente_trabajador'=>$presentetrabajador,
    ':describa_brevemente'=>$describabreve,
    ':presente_grupo'=>$presentegrupo,
    ':propicie_ambiente'=>$propicieambiente,
    ':comente_condiciones'=>$comentecondiciones,
    ':explique_mision'=>$expliquemision,
    ':senale_vision'=>$senalevision,
    ':muestra_ubicacion'=>$muestraubicacion,
    ':explique_formatos'=>$expliqueformatos,
    ':capacite_utilizacion'=>$capaciteutilizacion,
    ':explique_instrucciones'=>$expliqueinstrucciones,
    ':motive_trabajador'=>$motivetrabajador,
    ':id_empleado'=>$idempleado
));
$valida = $conexion->commit();

if($valida != false){
    echo "<script>Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Tus datos han sido actualizados exitosamente',
            showConfirmButton: false,
            timer: 1500
        })</script>";
}else{
    $conexion->rollBack();
    echo "<script>Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Error al actualizar tus datos',
        showConfirmButton: false,
        timer: 1500
    })</script>";
}
?>