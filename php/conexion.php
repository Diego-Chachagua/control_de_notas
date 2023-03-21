<?php
// Conexión a la base de datos
function conexion(){

$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=notas";
$user = "user=notasadmin";
$password = "password=incasnotas";


$db = pg_connect("$host $port $dbname $user $password");

// Comprobar la conexión
if ($db){
    echo "Exito";
}else{
    echo "Error".pg_last_error();
}
return $db;

}



?>