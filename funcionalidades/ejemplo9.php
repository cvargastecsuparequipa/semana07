<?php
$variable = 'manzana';
/*if ($variable == 'manzana') {
    echo "es manzana";
} elseif ($variable == 'Pera') {
    echo 'es pera';
} elseif ($variable == 'uva') {
    echo 'es uva';
}*/

switch ($variable) {
    case "manzana":
        echo "es manzana <br>";
        break;
    case "pera":
        echo "es pera <br>";
        break;
    case "uva":
        echo "es uva <br>";
        break;
}
