<?php

header('Access-Control-Allow-Origin: *');

    include_once('conexion.php');
    

    $result = mysqli_query($conexion, "select * from agenda") or die ('Error en el select')    ;
    $rows= array();
  
    
    while($r = mysqli_fetch_assoc($result)){
        $rows[]=$r;
    }
    $respuesta = json_encode($rows);
    echo $respuesta;
?>    
