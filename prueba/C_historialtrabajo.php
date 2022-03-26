<?php
require "Conexion.php";
//realizo la consulta
$consulta = "SELECT * FROM job_history";
$resultado = mysqli_query($conexion,$consulta) or die ("Algo ha ido mal con la consulta");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Employee_id</th>";
echo "<th>Start_date</th>";
echo "<th>End_date</th>";
echo "<th>Job_id</th>";
echo "<th>Department_id</th>";
while($columna=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>" . $columna['employee_id'] . "</td><td>" . $columna['start_date'] . "</td><td>" 
	. $columna['end_date'] . "</td><td>" . $columna['job_id'] . "</td><td>" . $columna['department_id'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
?>