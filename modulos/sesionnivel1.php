<?php
session_start();
$usuarioactivo = $_SESSION['username'];
$usuarionivel = $_SESSION['nivel'];

if (!isset($usuarioactivo)) {
  header("location:loginconsesion/login.php");
} else {
}
?>