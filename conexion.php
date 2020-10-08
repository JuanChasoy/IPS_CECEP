<?php
    $db_host ="localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "base_ips";
    
    $conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if(!$conexion){
        echo "error en la conexion";
    }
?>