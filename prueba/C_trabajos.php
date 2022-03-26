<?php
require "Conexion.php";
//realizo la consulta
$consulta = "SELECT * FROM jobs";
$resultado = mysqli_query($conexion,$consulta) or die ("Algo ha ido mal con la consulta");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Job_id</th>";
echo "<th>Job_title</th>";
echo "<th>Min_salary</th>";
echo "<th>Max_salary</th>";
while($columna=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>" . $columna['job_id'] . "</td><td>" . $columna['job_title'] . "</td><td>" . 
	$columna['min_salary'] . "</td><td>" . $columna['max_salary'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
?>