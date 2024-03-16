<?php


include 'conexion_be.php';
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO login_register_db(nombre_completo, correo,usuario, contrasena)
          VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
	header("location:home.html");
    echo '
    <script>
    alert("Usuario registrado exitosamentre"); 
    </script>
    ';
}    
?>