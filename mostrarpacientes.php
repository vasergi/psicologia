<?php
include 'conexion.php';
$consulta="select * from pacientes";
$resultado= mysqli_query($conexion,$consulta);
?>
<!doctype html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title>document</title>
		<style type="text/css">
			div{
				background: lightpink;
			}
		</style>

	</head>
	<body>
		<div style="text-align:center;">
			<h1>MOSTRAR PACIENTES</h1>
			<fielset style="background-color: blue";>
			<table>
			<tr>
			    <td>Documento</td>
			    <td>Nombre</td>
			    <td>Apellido</td>
			    <td>Telefono</td>
			    <td>Correo</td>
				<td>Acciones</td>
			</tr>
			<?php
			while($vec=mysqli_fetch_array($resultado)){?>
			<tr>
				<td><?php echo $vec[0] ?> </td>
				<td><?php echo $vec[1] ?> </td>
				<td><?php echo $vec[2] ?> </td>
				<td><?php echo $vec[3] ?> </td>
				<td><?php echo $vec[4] ?> </td>
				<td>
					//creo un hipervinculo y mando una variable con lapk por el metodo Get
					<a href="formularioact.php?doc=<?php echo $vec[0] ?>">Act</a>
					<a href="">Elim</a>
			    </td>
            </tr>
		<?php } ?>
		    
		    </table>
	        </fielset>
    </body>
</html>
			