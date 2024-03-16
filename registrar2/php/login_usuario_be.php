<?php
include 'conexion_be';
$correo = $_POST ['correo'];
$contrasena = $_POST ['contrasena'];
$validar_login = mysqli_query($conexion, "SELECT  * FROM usuarios where correo='$correo' and contrasena='$contrasena'");
if (mysqli_num_rows ($validar_login)>0) {
	header("location: Bienv.html");
	exit;
	}else {
		echo '
		<script> 
			alert("Usuario no existe, por avor verifique los datos introducidos");
			window.location = "../index.php";
		</script>
		';
		exit;

?>