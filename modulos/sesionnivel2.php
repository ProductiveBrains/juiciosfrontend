<?php
session_start();
$usuarioactivo = $_SESSION['username'];
$usuarionivel = $_SESSION['nivel'];

if (!isset($usuarioactivo)) {
  header("location:loginconsesion/login.php");
} else {
  if($usuarionivel ==3){
    session_destroy();
    header("location:loginconsesion/login.php");     
  }  
}
?>
