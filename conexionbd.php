<?php
    $server="mysql.webcindario.com";
    $bd=" aduanasystem";
    $usuario=" aduanasystem";
    $password="Eavila49062020";

    $conexion = new mysqli($server,$usuario,$password,$bd);


    if ($conexion->connect_errno) {
        echo "Nuestro sitio experimenta fallos....";
        exit();
    }
?>