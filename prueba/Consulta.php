<?php
require "Conexion.php";
//realizo la consulta
$consulta = "SELECT * FROM employees";
$resultado = mysqli_query($conexion,$consulta) or die ("Algo ha ido mal con la consulta");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Employee_id</th>";
echo "<th>First_name</th>";
echo "<th>Last_name</th>";
echo "<th>Email</th>";
echo "<th>Phone_number</th>";
echo "<th>Hire_date</th>";
echo "<th>Job_id</th>";
echo "<th>Salary</th>";
echo "<th>Commission_pct</th>";
echo "<th>Manager_id</th>";
echo "<th>Department_id</th>";
while($columna=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>" . $columna['employee_id'] . "</td><td>" . $columna['first_name'] . "</td><td>" .
    $columna['last_name'] . "</td><td>" . $columna['email'] . "</td><td>" . $columna['phone_number'] . "</td><td>" .
    $columna['hire_date'] . "</td><td>" . $columna['job_id'] . "</td><td>" . $columna['salary'] . "</td><td>" .
    $columna['commission_pct'] . "</td><td>" . $columna['manager_id'] . "</td><td>" . $columna['department_id'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
?>