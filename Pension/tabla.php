<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
	<table>
		<tr>
			<tr>Id</tr>
			<tr>Edad</tr>
			<tr>Genero</tr>
			<th>Edad</th>
		</tr>
		<?php
		#trae la información del archivo conexionphp
		include('conexion.php');
		#almacenar la orden
		$orden="SELECT * FROM pension";
		#ejecutar funcion
		$datos=mysqli_query(conexion,$orden)
		if (!$datos) {
			# code...
			die('error al traer la bd');
		}
		#imprimir usando la información 
		foreach ($datos as $pension) {
		?>
		<tr>
			<td><?php
			echo $pension['id_pension'];
			</td>
		</tr>		
		<?php
		?>
		?>
	</table>
</body>
</html>