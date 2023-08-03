<?php
//verifico que vengan datos de un formulario
if(isset($_POST['Enviar'])) {
    //incluyo el archivo de conexion para acceder a la variable conexion
    include 'conexion.php';
    //capturo los datos que vienen del formulario
    $Documento  =$_POST['documento'];
    $Nombre     =$_POST['nombre'];
    $Apellidos  =$_POST['apellidos'];
    $Telefono   =$_POST['telefono'];
    $Correo     =$_POST['correo'];

    $consulta="INSERT INTO PACIENTES( documentop, nombres, apellidos, telefono, correo) 
    VALUES ('$Documento', '$Nombre', '$Apellidos','$Telefono', '$Correo')";
    $query=mysqli_query($conexion,$consulta);

    if($query){
        echo "se guardo el registro del paciente";
        echo "<a href='formusu.php'>Volver</a>";
    }else {
        echo "tienes un error en la consulta";
    }
}else{
    echo "por favor llena el formulario";
}