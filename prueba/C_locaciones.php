<?php
require "Conexion.php";
//realizo la consulta
$consulta = "SELECT * FROM locations";
$resultado = mysqli_query($conexion,$consulta) or die ("Algo ha ido mal con la consulta");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Location_id</th>";
echo "<th>Street_address</th>";
echo "<th>Postal_code</th>";
echo "<th>City</th>";
echo "<th>State_province</th>";
echo "<th>Country_id</th>";
while($columna=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>" . $columna['location_id'] . "</td><td>" . $columna['street_address'] . "</td><td>" 
	. $columna['postal_code'] . "</td><td>" . $columna['city'] . "</td><td>" 
	. $columna['state_province'] . "</td><td>" . $columna['country_id'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
?>