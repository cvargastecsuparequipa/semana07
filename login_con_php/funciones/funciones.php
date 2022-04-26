<?php
function conectar(){
    $xc = mysqli_connect("localhost","root","","baseprueba");
    return $xc;
    die();
}
function desconectar($xc){
mysqli_close($xc);
}
?>