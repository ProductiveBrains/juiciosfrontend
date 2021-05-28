<?php
// echo 'hola';
$host='127.0.0.1';
$usuario = 'developer';
$clave='ineverstop';
$bd='UTJUICIOS';
// $pdo = new PDO('mysql:host=127.0.0.l;dbname=UTJUICIOS', 'developer','ineverstop', $this->opciones);



$conexion=mysqli_connect($host,$usuario,$clave,$bd);
if($conexion){
   //echo "conectado correctamente";
}else{
    echo "no se puede conectar";
}


?>