<?php
//verifico que vengan datos de un formulario
if(isset($_POST['Enviar'])) {
    //incluyo el archivo de conexion para acceder a la variable conexion
    include 'conexion.php';
    //capturo los datos que vienen del formulario
    $Documento  =$_POST['documento'];
    $Nombre     =$_POST['nombre'];
    $Apellidos  =$_POST['apellidos'];
    $Correo     =$_POST['correo'];
    $Telefono   =$_POST['telefono'];
    
    $consulta="INSERT INTO ACUDIENTES( documentoa, nombres, apellidos, correo, telefono) 
    VALUES ('$Documento', '$Nombre', '$Apellidos','$Correo','$Telefono' )";
    $query=mysqli_query($conexion,$consulta);

    if($query){
        echo "se guardo el registro del acudiente";
        echo "<a href='formularioacudientes.html'>Volver al formulario</a>";
    }else {
        echo "tienes un error en la consulta";
    }
}else{
    echo "por favor llena el formulario";
}