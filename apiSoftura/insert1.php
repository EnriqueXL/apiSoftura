<?php 

header('Access-Control-Allow-Origin: *');
include_once('conexion.php');
   
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $telefono = $_GET['telefono'];
    $fecha = $_GET['fecha'];
    

    $res = mysqli_query($conexion, "INSERT INTO agenda (nombre, correo,telefono,fecha) VALUES ('$nombre', '$correo','$telefono','$fecha')")  or die ('Error al guardar');
    $res = mysqli_query($conexion, $res);
    
    $res = json_encode('Success');
    echo $res;
    return $res;
?>

