<?php
#HOST
$conn = mysqli_connect('localhost','root','','nacion');
if (!$conn) {
	# code...
	die('error al conectar');

} else{
	# code...
	echo "la conexion se realizo correctamente";
}
?>
