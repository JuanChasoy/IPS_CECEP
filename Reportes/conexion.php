<?php
    static $db_host = "localhost";
    static $db_user = "root";
    static $db_pass = "";
    static $db_name = "base_ips";
    
    //servicor, usuario, contraseña usuario, nombre DB
    $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
?>