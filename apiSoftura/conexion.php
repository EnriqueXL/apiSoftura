<?php
$conexion=mysqli_connect("localhost", "root",   "", "apisoftura");
                        //HOST         USUARIO CLAVE BASE DE DATOS
if ($conexion) 
{
  /* echo "Conectado!"; */
}
else
{
	echo "error de conexion";
}
?>

