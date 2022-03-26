<?php
//datos de la base de datos
$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basededatos = "hr";
//conexión a la base de datos
$conexion = mysqli_connect($servidor,$usuario,"") or die("No se ha podido conectar al servidor de base de datos");
//<br> salto de línea
//selección de la base de datos
$db = mysqli_select_db($conexion,$basededatos) or die("¡Upps! No se ha podido conectar a la base de datos");

?>