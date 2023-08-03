<?php
//verifico que vengan datos de un formulario
if(isset($_POST[btn])) {
    //incluyo el archivo de conexion para acceder a la variable conexion
    include 'conexion.php'
    //capturo los datos que vienen el formulario
    $Documento  =$_POST['documento']
    $Nombres    =$_POST['nombre']
    $Apellidos  =$_POST['apellidos']
    $Telefono   =$_POST['telefono']
    $Correo     =$_POST['correo']

    $consulta="INSERT INTO PACIENTES( documento, nombres, apellidos, telefono, correo) 
    VALUES ('$Documento', '$Nombres', '$Apellidos','$Telefono', '$Correo')";
    $query=mysqli_quer($conexion,$consulta)

    if($query){
        echo "se guardo el registro del alumno";
        echo "<a href='frpacientes.html'>Volver al formulario</a>
    }else{
        echo "tienes un error en la <consulta";
    }
}else{
    echo "por favor llena el formulario";
}