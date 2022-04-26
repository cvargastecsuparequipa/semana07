<?php

session_start();
//echo session_id();
$_SESSION['usuario'] = "Cristhian";

echo 'sesion inciiada y establecida con nombre de usuario'.$_SESSION['usuario'];


?>