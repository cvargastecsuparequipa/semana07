<?php
$array=array ("Pelicula"=>"Señor de los anillos","Genero"=>"Accion" ,"Precio"=>"10","Fecha"=>date('d-m-Y'));
//print_r($array);
foreach($array as $indice => $valor){

    echo $valor. "<br>";
    
}

?>