<?php
$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$asunto = $_POST["asunto"];
$msn = $_POST["mensaje"];

// como va a llegar
$mensaje = "Este mail fue enviado por: " . $nombre . ", \r\n";
$mensaje = "Su mail es: " . $mail . ", \r\n";
$mensaje = "Este mail llego desde la web. Asunto: " . $asunto . ", \r\n";
$mensaje = "Mensaje " . $msn . ", \r\n";
$mensaje = "Enviado el  " . date("d/m/Y" , time());

//para quien es el mail

$destino = "ilikeitati@gmail.com";

mail($destino, $asunto, utf8_decode($mensaje), $header);

//redireccion al haber enviado el mail

header("Location:exitoso.html")

?>