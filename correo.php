<?php
    $destinatario = 'verois_28_2@hotmail.com';
    $mensaje = $_POST['mensaje'];
    $asunto = $_POST['asunto'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $header = "Enviado desde la página de ZEUS";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado correctamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>