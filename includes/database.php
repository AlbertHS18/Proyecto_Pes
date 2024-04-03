<?php
$conexion = new mysqli("localhost", "root", "", "prueba");
if($conexion->connect_error)
{
    die("Connection failed: " . $db->connect_error);
}
$conexion->set_charset("utf8")

?>