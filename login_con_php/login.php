<?php
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];
include('funciones/funciones.php');
$xc = conectar();
$sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' AND password = " . $password;
//echo $sql;
$res = mysqli_query($xc, $sql) or die("Error");
$filas = mysqli_fetch_array($res);
if (isset($filas)) {
    echo 'Logueado';
   $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: videojuegos.html", TRUE, 301);
echo  $_SESSION['usuario' ];
    exit();
} else {
    echo 'usuario o pasword incorrecto';
}
