<?php
$array = array("nombre" => "Cristhian","apellidos" => "vargas","genero"=>"masculino");
//print_r($array);
//echo $array_animales[0];

foreach($array as $indice=>&$valor)
{
    echo $valor."<br>";
}

?>