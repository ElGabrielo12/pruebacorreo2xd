<?php
    $destinatario = 'valenciagabrielandre@gmail.com';
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la página de github xd";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado xd osea si funciona')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>