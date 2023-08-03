<?php
//verifico que vengan datos de un formulario
if(isset($_POST['Enviar'])) {
    //incluyo el archivo de conexion para acceder a la variable conexion
    include 'backend/conexion.php';
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
        echo "se guardo el registro del alumno";
        echo "<a href='formulario.html'>Volver al formulario</a>";
    }else {
        echo "tienes un error en la consulta";
    }
}else{
    echo "por favor llena el formulario";
}