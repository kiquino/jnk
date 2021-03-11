<?php

$nombre = $_POST['nombre'];
$email = $_POST['mail'];
$tel = $_POST['tel'];
$text = $_POST['text'];

if (isset($nombre,$email,$tel,$text)) {
    echo("mensaje enviado");
}else{
    echo("Todas las casillas deben estar correctamente completadas");
}


?>