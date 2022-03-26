<?php
require "Conexion.php";
//realizo la consulta
$consulta = "SELECT * FROM departments";
$resultado = mysqli_query($conexion,$consulta) or die ("Algo ha ido mal con la consulta");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Department_id</th>";
echo "<th>Department_name</th>";
echo "<th>Manager_id</th>";
echo "<th>Location_id</th>";
while($columna=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>" . $columna['department_id'] . "</td><td>" . $columna['department_name'] . "</td><td>" . 
	$columna['manager_id'] . "</td><td>" . $columna['location_id'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
?>