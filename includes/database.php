<?php
$conexion = new mysqli("localhost", "root", "", "pes");
if($conexion->connect_error)
{
    die("Connection failed: " . $db->connect_error);
}
$conexion->set_charset("utf8")
?>