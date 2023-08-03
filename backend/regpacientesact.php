<?php
//verifico que vengan datos de un formulario
if(isset($_POST['Actualizar'])) {
    //incluyo el archivo de conexion para acceder a la variable conexion
    include 'conexion.php';
    //capturo los datos que vienen del formulario
    $Documento  =$_POST['documento'];
    $Nombre     =$_POST['nombre'];
    $Apellidos  =$_POST['apellidos'];
    $Telefono   =$_POST['telefono'];
    $Correo     =$_POST['correo'];
    

    $consulta=" UPDATE pacientes SET documentop= '$Documento',nombres= '$Nombre',apellidos='$Apellidos',
    telefono='$Telefono',correo='$Correo' WHERE documentop ='$Documento'";
    $query=mysqli_query($conexion,$consulta);
    
   
    if($query){
        echo "se guardo la actualizacion del paciente";
        echo "<a href='mostrarpacientes.php'>Volver al mostrar</a>";
    } else {
        echo "tienes un error en la consulta";
    }
}

?>