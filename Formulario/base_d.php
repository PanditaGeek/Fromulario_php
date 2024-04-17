<?php 
$mysqli = new mysqli("127.0.0.1", "root", "", "basedatos", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>

//Crear base de datos en XAMP