<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Autoesstma";
//se crea la conexion
$conexion=mysqli_connect($servername,$username,$password,$dbname);
 if($conexion->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
   echo "conexión exitosa!!!";
}
?>
 }