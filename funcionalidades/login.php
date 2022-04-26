<?php
$usuario =$_POST['usuario'];
$password =$_POST['password'];

//echo $usuario.$password;
session_start();
//echo session_id();
$_SESSION['usuario'] = $usuario;
$_SESSION['password'] = $password;

echo 'sesion inciiada y establecida con nombre de usuario'.$_SESSION['usuario'];

?>