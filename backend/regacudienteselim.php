<?php
//verifico que vengan datos de un formulario
if(isset($_POST['Eliminar'])) {
    //incluyo el archivo de conexion para acceder a la variable conexion
    include 'conexion.php';
    //capturo los datos que vienen del formulario
    $Documento  =$_POST['documento'];
    $Nombre     =$_POST['nombre'];
    $Apellidos  =$_POST['apellidos'];
    $Correo     =$_POST['correo'];
    $Telefono   =$_POST['telefono'];
    

    $consulta="DELETE FROM `acudientes` WHERE documentoa ='$Documento'";
    $query=mysqli_query($conexion,$consulta);

    if($query){
        echo "se elimino la informacion del acudiente";
        echo "<a href='mostraracudientes.php'>Volver al mostrar</a>";
    }else {
        echo "tienes un error en la consulta";
    }
}else{
    echo "por favor llena el formulario";
}