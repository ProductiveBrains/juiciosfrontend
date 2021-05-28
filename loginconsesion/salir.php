<?php
session_start();
$usuarioactivo = $_SESSION['username'];
$usuarionivel = $_SESSION['nivel'];
session_destroy();
header("location:http://ut.sotano.digital/");
?>