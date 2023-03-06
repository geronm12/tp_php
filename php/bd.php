<?php
$dbName = 'tfinal'; 
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, $dbName);

if($conn === false){
    die("ERROR: No se pudo conectar a la base de datos. " . mysqli_connect_error());
}

?>