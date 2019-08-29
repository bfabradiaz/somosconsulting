<?php
$destino="barby230992@gmail.com"
$nombre = $_POST["name"];
$email = $_POST["email"];
$telefono = $_POST["phone"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino,"Contacto",$contenido);
header("Location:enviado.html")

<?

