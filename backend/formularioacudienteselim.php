<?php
//capturo la variable que viene del formulario con la llave primaria
$doc=$_GET['doc'];
include 'conexion.php';
//creo la consulta
$query="select * from acudientes where documentoa=$doc";
//ejecuto la consulta con la funcion
$cons= mysqli_query ($conexion,$query);
//convierto el resultado en vector para acceder
//facilmente a los datos
$fila=mysqli_fetch_array($cons);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>FORMULARIO</title> 
    <body>
    <center><h1>FORMULARIO DE ACUDIENTES</h1></center>
    <body style="background-color:azure;">
    
    </body>
</head>
<style type="text/css">
    .vale{
        background-color: beige;
        width: 150PX;
        height: 25px;
        border: 1px solid black;
        border-radius: 8px;
    }
    .serna{
        background-color: black;
        width: 100PX;
        height: 25px;
        border: 1px solid black;
        border-radius: 8px;
        color: white;
    }

</style>
<body>
   <fielset style=" background-color:beige ;">
    
    <form action="regacudienteselim.php" method="post"><center>
        <label><b>Documento:</b></label><br>
        <input class="vale" type="number" value="<?php echo $fila[0]?>" name="documento" placeholder="Documento" id="documento"><br><br>
        <label><b>Nombre:</b></label><br>
        <input class="vale" type="text" value="<?php echo $fila[1]?>" name="nombre" placeholder="Nombre" id="nombre"><br><br>
        <label><b>Apellidos:</b></label><br>
        <input class="vale" type="text" value="<?php echo $fila[2]?>" name="apellidos" placeholder="Dos apellidos" id="apellidos"><br><br>
        <label><b>Correo:</label><br>
        <input class="vale" type="email" value="<?php echo $fila[3]?>" name="correo" placeholder="Correo" id="correo"><br><br>  
        <label><b>Telefono:</b></label><br>
        <input class="vale" type="number" value="<?php echo $fila[4]?>" name="telefono" placeholder="Telefono" id="telefono"><br><br>
        <input class="serna" type="submit" value="Eliminar" name="Eliminar">
        <input class="serna" type="submit" name="Enviar"></center></form></body>



    </form>
    </fielset>
</body>
</html>