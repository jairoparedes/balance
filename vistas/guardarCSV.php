<?php

// add data
$index = $_POST['nombre'];
$url = $_POST['url'];

if(file_put_contents($url, $index)){
    print_r($index);
    echo $contenido;
    echo "Guardado Exitosamente";
}
?>