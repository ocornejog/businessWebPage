<?php
require "Conexion.php";
//realizo la consulta
$consulta = "SELECT * FROM regions";
$resultado = mysqli_query($conexion,$consulta) or die ("Algo ha ido mal con la consulta");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Region_id</th>";
echo "<th>Region_name</th>";
while($columna=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>" . $columna['region_id'] .  "</td><td>" . $columna['region_name'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
?>