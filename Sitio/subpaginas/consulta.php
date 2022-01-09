<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Envio de consultas</title>
</head>

<body>

<?php
// connect to the database
// mysqli_connect(host, user, pass, database);
$conexion = mysqli_connect('localhost', 'novvtlqt_wethinking', 'Rosariocentral2018#', 'novvtlqt_wp760');
// check connection 
if (mysqli_connect_errno()) {
    echo "¡Lo sentimos! No se pudo acceder a la base de datos. Pruebe con nuestros otros canales. Disuclpe." . mysqli_connect_error();
}

$destino = "jmico@wethinking.com.ar";
$asunto = "Formulario de contacto";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
mail ($destino, $asunto, $nombre, $email, $mensaje);

print ("<h2>Muchas gracias por su mensaje</h2>");

?>

</body>
</html>
