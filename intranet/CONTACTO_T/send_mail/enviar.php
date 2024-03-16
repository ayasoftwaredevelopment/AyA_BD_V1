<?php 

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];


//echo $correo . " " . $nombre . " " . $mensaje;


$destinatario = "amlsistemas@gmal.com";
$asunto = "Mensaje del Cliente"; 
$cuerpo = '
    <html> 
        <head> 
            <title>Nuevo contacto Rectinorte</title> 
        </head>

        <body> 
            <h1>Solicitud de Nuevo contacto Rectinorte !  </h1>
            <p> 
                Contacto:  '.$nombre . ' - ' . $asunto .'  <br>
                Mensaje: '.$mensaje.' 
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "Correo enviado"; 
?> 

<a href="index.html">Volver a inicio</a>