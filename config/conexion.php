<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pruebatecnica_msdigital');
define('DB_PASSWORD', 'SV]WQL08j8v@');
define('DB_NAME', 'pruebatecnica_smdigital');
 
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($connect === false){
    die("Error de Conexion " . mysqli_connect_error());
}
?>