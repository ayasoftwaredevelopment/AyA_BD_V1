<?php

include('conexion_be.php');
include("Bienv.html");

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];


$consulta = "SELECT* FROM Personal where usuario = '$usuario' and contrasena ='$contrasena' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:Bienv.html");

}else{
    include("Bienv.html");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>