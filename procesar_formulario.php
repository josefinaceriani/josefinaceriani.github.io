<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $correo = htmlspecialchars($_POST['correo']);
    $empresa = htmlspecialchars($_POST['empresa']);
    $rol = htmlspecialchars($_POST['rol']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Destinatario del correo
    $destinatario = "josefinacerianimacario@gmail.com";
    $asunto = "Nuevo mensaje de contacto";

    // Contenido del correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Apellido: $apellido\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Empresa: $empresa\n";
    $contenido .= "Rol: $rol\n";
    $contenido .= "Mensaje: $mensaje\n";

    // Encabezados adicionales
    $headers = "From: $correo";

    // Enviar el correo
    if (mail($destinatario, $asunto, $contenido, $headers)) {
        header('Location: formulario.php?status=success');
        exit;
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>

