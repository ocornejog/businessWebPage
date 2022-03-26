<?php
require "Conexion.php";
//realizo la consulta
$consulta = "SELECT * FROM countries";
$resultado = mysqli_query($conexion,$consulta) or die ("Algo ha ido mal con la consulta");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Country_id</th>";
echo "<th>Country_name</th>";
echo "<th>Region_id</th>";
while($columna=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>" . $columna['country_id'] . "</td><td>" . $columna['country_name'] . "</td><td>" . 
	$columna['region_id'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
?>