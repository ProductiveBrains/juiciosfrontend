<?php
session_start();
require 'conexion.php';

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$_SESSION['username'] = $usuario;

$q = "SELECT COUNT(*) as contar FROM USUARIOS WHERE usuario=BINARY'$usuario' AND clave=BINARY'$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
    header("location:http://ut.sotano.digital/");
} else {
    header("location:login.php");
}
